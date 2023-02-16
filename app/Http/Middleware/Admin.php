<?php

namespace App\Http\Middleware;

use Closure;
use http\Exception\BadHeaderException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Admin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        try {
            if(Auth::user()->admin){
                return $next($request);
            }
        }
        catch (BadHeaderException){
            route('order.index');
        }
    }
}
