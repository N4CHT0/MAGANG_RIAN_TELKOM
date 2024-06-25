<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class Karyawan
{
    public function handle($request, Closure $next)
    {
        if (Auth::check() && Auth::user()->isKaryawan()) {
            return $next($request);
        }

        return redirect('/home')->with('error', 'Unauthorized access for Karyawan');
    }
}
