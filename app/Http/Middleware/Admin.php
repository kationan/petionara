<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use App\Models\User;
use App\Models\Role;
use Illuminate\Database\Query\Builder;

class Admin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $role = Role::first();
        $user = User::with('roles')->first();
        foreach ($user->roles as $key => $value) {
            if ($value->role_uuid == 'Ahg7iu\/we3-R5g47'){
                return $next($request);
            }
        }
      
        return $next($request);

    }
}
