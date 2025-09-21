<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;

class RoleMiddleware
{
    public function handle(Request $request, Closure $next, $role): Response
    {
    $user = Auth::user();

    if($user->role !== $role) {
        return response('Unauthorzied' , 403);
    }

    return $next($request);
        
    }
}
