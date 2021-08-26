<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class nurseMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if(!\Auth::check() || \Auth::user()->type != "1") {
            abort(403);
        }
        return $next($request);
    }
}
