<?php

namespace App\Http\Middleware;

use Auth;
use Closure;
use Illuminate\Http\Request;
use Tymon\JWTAuth\Facades\JWTAuth;
use App\Models\User;
use App\Models\Role;

class RoleCheck
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle($request, Closure $next, string $role)
    {
        $userRole = Role::findOrFail(JWTAuth::user()->role_id)->level;

        $roles = [
            'Superadmin' => ['1'],
            'PIC' => ['1','2'],
            'Unit Head' => ['1','2','3'],
            'Unit Member' => ['1','2','3','4'],
            'Driver' => ['1','2','3','4','5'],
            'Officer' => ['1','2','3','4','5','6']
        ];

        if (in_array($userRole, $roles[$role])) {
            return $next($request);
        }
        
        return response()->json(['msg' => 'User role unauthorized'], 422);
    }

    private function guard()
    {
        return Auth::guard();
    }
}
