<?php

namespace App\Http\Middleware;

use Closure;

class VerifySession
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

        if (($request->path() == 'admin/login') && $request->session()->get('user')) {
            return redirect('/admin/index');
        }

        if (($request->path() != 'admin/login') && !$request->session()->get('user')) {
            return redirect('/admin/login');
        }

        return $next($request);
    }
}
