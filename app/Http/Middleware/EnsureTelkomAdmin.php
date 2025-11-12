<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EnsureTelkomAdmin
{
    /**
     * Handle an incoming request.
     * Allow only users with role === 'admin'.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        $user = $request->user() ?? Auth::user();

        // Assumption: admin accounts have role = 'admin'.
        if (!$user || ($user->role ?? null) !== 'admin') {
            // For AJAX/JSON requests return JSON 403, else abort with 403 page.
            if ($request->expectsJson()) {
                return response()->json(['message' => 'Unauthorized. Admins only.'], 403);
            }

            abort(403, 'Unauthorized. Admins only.');
        }

        return $next($request);
    }
}
