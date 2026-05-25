<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rsvp extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'phone',
        'presence',
        'guests',
        'message',
        'template_slug',
        'ip_address',
        'user_agent',
    ];
}