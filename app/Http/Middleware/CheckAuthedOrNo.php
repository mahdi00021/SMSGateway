<?php

namespace App\Http\Middleware;

use Closure;


class CheckAuthedOrNo
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \Closure $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if (!auth('api')->user()) {
            return response()->json(['error' => 'Unauthorized'], 401);
        }
        return $next($request);
    }
}
