<?php

namespace App\Http\Middleware;

use Closure;

class isOfficer
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
        if(!auth()->check() || auth()->user()->isOfficer()) {
            return $next($request);
        }
        return redirect('/dashboard_officer');
    }
}
