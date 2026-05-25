<?php

namespace App\Http\Middleware;

use Illuminate\Routing\Middleware\SubstituteBindings as Middleware;

class SubstituteBindings extends Middleware
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