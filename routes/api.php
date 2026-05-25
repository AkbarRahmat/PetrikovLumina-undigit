<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\RsvpController;
use App\Http\Controllers\Api\CommentController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
*/

// Public API - RSVP
Route::post('/rsvp', [RsvpController::class, 'store'])->name('api.rsvp.store');
Route::get('/rsvps', [RsvpController::class, 'index'])->name('api.rsvp.index');

// Public API - Comments
Route::post('/comment', [CommentController::class, 'store'])->name('api.comment.store');
Route::get('/comments', [CommentController::class, 'index'])->name('api.comment.index');

// Admin API (protected by admin session)
Route::middleware('admin.auth')->group(function () {
    Route::get('/rsvp/stats', [RsvpController::class, 'stats'])->name('api.rsvp.stats');
    Route::get('/admin/comments', [CommentController::class, 'adminIndex'])->name('api.admin.comments');
    Route::put('/admin/comments/{comment}/status', [CommentController::class, 'updateStatus'])->name('api.admin.comments.status');
});