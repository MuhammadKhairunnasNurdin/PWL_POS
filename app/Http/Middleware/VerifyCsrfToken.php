<?php

namespace App\Http\Middleware;

use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken as Middleware;

class VerifyCsrfToken extends Middleware
{
    /**
     * The URIs that should be excluded from CSRF verification.
     *
     * @var array<int, string>
     */
    protected $except = [
        /**
         * Create Exception for Csrf Protection, because those 3 url aren't using Csrf validation
         */
        /*'/kategori',
        '/user',
        '/level'*/
    ];
}
