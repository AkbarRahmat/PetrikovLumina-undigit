<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Log;

class CommentController extends Controller
{
    /**
     * Store a new comment with anti-spam protection.
     */
    public function store(Request $request)
    {
        // === LAYER 1: HONEYPOT CHECK ===
        if ($request->filled('website')) {
            Log::warning('Comment Honeypot triggered', [
                'ip' => $request->ip(),
                'name' => $request->name,
            ]);
            return response()->json([
                'success' => true,
                'message' => 'Terima kasih! Ucapan Anda telah dikirim.',
            ]);
        }

        // === LAYER 2: TIME-BASED CHECK ===
        $loadedAt = $request->input('_loaded_at', 0);
        if ($loadedAt > 0 && (time() - $loadedAt) < 3) {
            return response()->json([
                'success' => false,
                'message' => 'Mohon tunggu beberapa saat sebelum mengirim.',
            ], 429);
        }

        // === LAYER 3: RATE LIMITING ===
        $rateKey = 'comment_rate_' . $request->ip();
        $attempts = (int) Cache::get($rateKey, 0);
        
        if ($attempts >= 3) {
            return response()->json([
                'success' => false,
                'message' => 'Terlalu banyak permintaan. Silakan coba lagi nanti.',
            ], 429);
        }
        
        Cache::put($rateKey, $attempts + 1, now()->addMinutes(1));

        // === LAYER 4: VALIDASI INPUT ===
        $validated = $request->validate([
            'name' => 'required|string|max:50',
            'message' => 'required|string|max:500',
            'template_slug' => 'nullable|string|max:50',
        ]);

        // Sanitize input
        $validated['name'] = strip_tags($validated['name']);
        $validated['message'] = strip_tags($validated['message']);

        // === LAYER 5: DUPLICATE CHECK ===
        $dupKey = 'comment_dup_' . md5($validated['name'] . $validated['message']);
        if (Cache::has($dupKey)) {
            return response()->json([
                'success' => false,
                'message' => 'Ucapan yang sama sudah dikirim.',
            ], 429);
        }
        Cache::put($dupKey, true, now()->addHours(24));

        // === SIMPAN KE DATABASE ===
        $comment = Comment::create([
            'name' => $validated['name'],
            'message' => $validated['message'],
            'status' => 'approved',
            'template_slug' => $validated['template_slug'] ?? null,
            'ip_address' => $request->ip(),
            'user_agent' => $request->userAgent(),
        ]);

        return response()->json([
            'success' => true,
            'message' => 'Terima kasih! Ucapan Anda telah dikirim.',
            'data' => $comment,
        ], 201);
    }

    /**
     * Get comments for a template (only approved).
     */
    public function index(Request $request)
    {
        $query = Comment::where('status', 'approved');

        if ($request->filled('template_slug')) {
            $query->where('template_slug', $request->template_slug);
        }

        $comments = $query->orderBy('created_at', 'desc')
            ->paginate(20);

        return response()->json([
            'success' => true,
            'data' => $comments,
        ]);
    }

    /**
     * Admin: Get all comments including pending.
     */
    public function adminIndex(Request $request)
    {
        $query = Comment::query();

        if ($request->filled('status')) {
            $query->where('status', $request->status);
        }

        $comments = $query->orderBy('created_at', 'desc')
            ->paginate(20);

        return response()->json([
            'success' => true,
            'data' => $comments,
        ]);
    }

    /**
     * Admin: Update comment status (approve/reject).
     */
    public function updateStatus(Request $request, Comment $comment)
    {
        $validated = $request->validate([
            'status' => 'required|in:approved,rejected,pending',
        ]);

        $comment->update(['status' => $validated['status']]);

        return response()->json([
            'success' => true,
            'message' => 'Status ucapan berhasil diperbarui.',
            'data' => $comment,
        ]);
    }
}