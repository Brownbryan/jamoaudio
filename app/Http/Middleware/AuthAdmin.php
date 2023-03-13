<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AuthAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if(session('user_type') === 'ADMIN'){
            return $next($request);
        }
        else
        {
            session()->flash('error','You are not authorized to access this page');
            return redirect()->route('login');
        }
        return $next($request);

    }
}
