<?php

// app/Http/Middleware/CheckPasswordChange.php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class CheckPasswordChange
{
    public function handle($request, Closure $next)
    {
        if (Auth::check() && Auth::user()->password_changed_at === null) {
            return redirect()->route('password.change');
        }

        return $next($request);
}

    protected $routeMiddleware = [
        // other middleware
        'password.change' => \App\Http\Middleware\CheckPasswordChange::class,
];
}