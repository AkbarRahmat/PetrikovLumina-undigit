<?php

namespace App\Http\Middleware;

use Illuminate\View\Middleware\ShareErrorsFromSession as Middleware;

class ShareErrorsFromSession extends Middleware
{
    /**
     * The names of the cookies that should not be encrypted.
     *
     * @var array<int, string>
     */
    protected $except = [
        //
    ];
}