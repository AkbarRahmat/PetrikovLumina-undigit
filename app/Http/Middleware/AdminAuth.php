<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AdminAuth
{
    /**
     * Handle an incoming request.
     * Checks if admin is logged in via session.
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (!session()->has('admin_logged_in')) {
            return response()->json([
                'success' => false,
                'message' => 'Unauthorized. Silakan login sebagai admin.',
            ], 401);
        }

        return $next($request);
    }
}