<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class IsClient {

    public function handle($request, Closure $next) {
        if (Auth::user() && Auth::user()->user_type == '1') {
            return $next($request);
        }

        return redirect('/');
    }

}
