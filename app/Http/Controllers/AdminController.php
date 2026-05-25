<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Rsvp;
use App\Models\Comment;

class AdminController extends Controller
{
    public function loginForm()
    {
        if (session()->has('admin_logged_in')) {
            return redirect()->route('admin.dashboard');
        }
        return view('admin.login');
    }

    public function login(Request $request)
    {
        $request->validate([
            'password' => 'required',
        ]);

        $adminPassword = config('app.admin_password', 'admin123');

        if ($request->password === $adminPassword) {
            session(['admin_logged_in' => true]);
            return redirect()->route('admin.dashboard');
        }

        return back()->with('error', 'Password salah.');
    }

    public function dashboard()
    {
        if (!session()->has('admin_logged_in')) {
            return redirect()->route('admin.login');
        }

        // Orders
        $orders = [];
        try {
            $orders = DB::table('orders')->orderBy('created_at', 'desc')->get();
        } catch (\Exception $e) {
            // Table doesn't exist yet
        }

        // RSVP Stats
        $rsvpTotal = Rsvp::count();
        $rsvpHadir = Rsvp::where('presence', 'hadir')->count();
        $rsvpTidakHadir = Rsvp::where('presence', 'tidak_hadir')->count();
        $rsvpTotalGuests = Rsvp::where('presence', 'hadir')->sum('guests');

        // RSVP Latest
        $rsvps = Rsvp::orderBy('created_at', 'desc')->take(10)->get();

        // Comments Stats
        $commentsTotal = Comment::count();
        $commentsPending = Comment::where('status', 'pending')->count();
        $commentsApproved = Comment::where('status', 'approved')->count();

        // Comments Latest
        $comments = Comment::orderBy('created_at', 'desc')->take(10)->get();

        return view('admin.dashboard', compact(
            'orders',
            'rsvpTotal', 'rsvpHadir', 'rsvpTidakHadir', 'rsvpTotalGuests', 'rsvps',
            'commentsTotal', 'commentsPending', 'commentsApproved', 'comments'
        ));
    }

    public function logout(Request $request)
    {
        $request->session()->forget('admin_logged_in');
        return redirect()->route('admin.login');
    }
}
