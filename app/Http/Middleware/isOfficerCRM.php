<?php

namespace App\Http\Middleware;

use Closure;

class isOfficerCRM
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
        if( auth()->user()->isofficercrm()) {
            return $next($request);
        }
    }
}
