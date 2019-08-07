<?php
/**
 * Created by PhpStorm.
 * User: synclusive
 * Date: 21-06-2018
 * Time: 16:08
 */

namespace App\Http\Middleware;


use Closure;
use Illuminate\Support\Facades\Auth;

class RedirectIfAdmin
{
    public function handle($request, Closure $next, $guard = 'admin')
    {
        if (Auth::guard($guard)->check()) {
            return redirect('/dashboard');
        }
        return $next($request);
    }
}