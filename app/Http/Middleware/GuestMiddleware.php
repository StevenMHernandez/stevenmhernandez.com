<?php namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class GuestMiddleware
{
    public function handle($request, Closure $next)
    {

        if(Auth::check()) return redirect()->route('admin');
        return $next($request);
    }
}