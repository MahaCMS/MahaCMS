<?php

namespace MahaCMS\MahaCMS\Middleware;

use Auth;
use Closure;
use MahaCMS\Users\Models\User;

class MahaCMSAuth
{
    public function handle($request, Closure $next)
    {
        if (!Auth::guard('api')->user()) {
            return response()->json([
                'authenticated' => false
            ]);
        }
        return $next($request);
    }
}