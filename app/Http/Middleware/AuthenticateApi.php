<?php

namespace App\Http\Middleware;

use Closure;

// Illuminate
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

// Symfony
use Symfony\Component\HttpFoundation\Response;

// Trait
use App\Traits\HttpResponseTrait;


class AuthenticateApi
{
    use HttpResponseTrait;

    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if(!Auth::user()) {
            return $this->errorResponse('Unthorized', 401);
        }

        return $next($request);
    }
}
