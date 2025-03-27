<?php

namespace App\Http\Middleware;

use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken as Middleware;

class VerifyCsrfToken extends Middleware
{
    /**
     * The URIs that are exempt from CSRF verification.
     *
     * @var array
     */
    protected $except = [
        'api/*'
    ];
}
