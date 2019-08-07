<?php
/**
 * Created by PhpStorm.
 * User: wilson
 * Date: 07/07/17
 * Time: 2:59 PM
 */

namespace App\Http\Middleware;


use Closure;
use Illuminate\Support\Facades\Auth;

class AdminAuthenticate
{
    public function handle($request, Closure $next, $guard = 'admin')
    {
        if (!Auth::guard($guard)->check()) {
            return redirect('/admin');
        }
        return $next($request);
    }
}