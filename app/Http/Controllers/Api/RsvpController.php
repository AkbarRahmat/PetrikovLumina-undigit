<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Rsvp;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Log;

class RsvpController extends Controller
{
    /**
     * Store RSVP with anti-spam protection.
     */
    public function store(Request $request)
    {
        // === LAYER 1: HONEYPOT CHECK ===
        // Hidden field that bots will fill, humans won't see
        if ($request->filled('website')) {
            Log::warning('RSVP Honeypot triggered', [
                'ip' => $request->ip(),
                'name' => $request->name,
            ]);
            return response()->json([
                'success' => true,
                'message' => 'Terima kasih! RSVP Anda telah dikirim.',
            ]);
        }

        // === LAYER 2: TIME-BASED CHECK ===
        // Forms submitted too fast (< 5 seconds) are likely bots
        $loadedAt = $request->input('_loaded_at', 0);
        if ($loadedAt > 0 && (time() - $loadedAt) < 5) {
            Log::warning('RSVP Time check failed (too fast)', [
                'ip' => $request->ip(),
                'time_elapsed' => time() - $loadedAt,
            ]);
            return response()->json([
                'success' => false,
                'message' => 'Mohon tunggu beberapa saat sebelum mengirim.',
            ], 429);
        }

        // === LAYER 3: RATE LIMITING ===
        // Max 5 attempts per IP per minute
        $rateKey = 'rsvp_rate_' . $request->ip();
        $attempts = (int) Cache::get($rateKey, 0);
        
        if ($attempts >= 5) {
            Log::warning('RSVP Rate limit exceeded', [
                'ip' => $request->ip(),
                'attempts' => $attempts,
            ]);
            return response()->json([
                'success' => false,
                'message' => 'Terlalu banyak permintaan. Silakan coba lagi nanti.',
            ], 429);
        }
        
        Cache::put($rateKey, $attempts + 1, now()->addMinutes(1));

        // === LAYER 4: VALIDASI INPUT ===
        $validated = $request->validate([
            'name' => 'required|string|max:100',
            'phone' => 'nullable|string|max:20',
            'presence' => 'required|in:hadir,tidak_hadir',
            'guests' => 'required|integer|min:1|max:10',
            'message' => 'nullable|string|max:500',
            'template_slug' => 'nullable|string|max:50',
        ]);

        // === LAYER 5: DUPLICATE CHECK ===
        // Same name + phone within 24 hours
        $duplicateKey = 'rsvp_dup_' . md5($validated['name'] . ($validated['phone'] ?? ''));
        
        if (Cache::has($duplicateKey)) {
            return response()->json([
                'success' => false,
                'message' => 'Anda sudah mengirim RSVP. Mohon tidak mengirim ulang.',
            ], 429);
        }
        
        Cache::put($duplicateKey, true, now()->addHours(24));

        // === SIMPAN KE DATABASE ===
        $rsvp = Rsvp::create([
            'name' => $validated['name'],
            'phone' => $validated['phone'] ?? null,
            'presence' => $validated['presence'],
            'guests' => $validated['guests'],
            'message' => $validated['message'] ?? null,
            'template_slug' => $validated['template_slug'] ?? null,
            'ip_address' => $request->ip(),
            'user_agent' => $request->userAgent(),
        ]);

        Log::info('RSVP submitted successfully', [
            'name' => $rsvp->name,
            'presence' => $rsvp->presence,
            'ip' => $request->ip(),
        ]);

        return response()->json([
            'success' => true,
            'message' => 'Terima kasih ' . $rsvp->name . '! RSVP Anda telah dikirim.',
            'data' => $rsvp,
        ], 201);
    }

    /**
     * Get RSVP list (for admin).
     */
    public function index(Request $request)
    {
        $query = Rsvp::query();

        if ($request->filled('presence')) {
            $query->where('presence', $request->presence);
        }

        if ($request->filled('template_slug')) {
            $query->where('template_slug', $request->template_slug);
        }

        $rsvps = $query->orderBy('created_at', 'desc')->paginate(20);

        return response()->json([
            'success' => true,
            'data' => $rsvps,
        ]);
    }

    /**
     * Get RSVP statistics for admin dashboard.
     */
    public function stats()
    {
        $total = Rsvp::count();
        $hadir = Rsvp::where('presence', 'hadir')->count();
        $tidakHadir = Rsvp::where('presence', 'tidak_hadir')->count();
        $totalGuests = Rsvp::where('presence', 'hadir')->sum('guests');

        return response()->json([
            'success' => true,
            'data' => [
                'total' => $total,
                'hadir' => $hadir,
                'tidak_hadir' => $tidakHadir,
                'total_guests' => $totalGuests,
            ],
        ]);
    }
}