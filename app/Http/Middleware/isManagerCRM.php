<?php

namespace App\Http\Middleware;

use Closure;

class isManagerCRM
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
        $dosen = Pic::find(Auth::user()->username);
        if($dosen)
            return $next($request);
        
        return response()->view('errors.401', [], 401);
    }
}
