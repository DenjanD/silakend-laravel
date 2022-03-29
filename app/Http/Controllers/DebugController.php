<?php

namespace App\Http\Controllers;

use Auth;
use App\Models\User;
use App\Models\Role;
use Illuminate\Http\Request;
use Tymon\JWTAuth\Facades\JWTAuth;

class DebugController extends Controller
{
    public function debug () {
        $token = $this->guard()->attempt([
            'email' => 'driver@example.com',
            'password' => '123'
        ]);
        $userRole = Role::findOrFail(JWTAuth::user()->role_id)->level;

        return $token;
    }

    private function guard()
    {
        return Auth::guard();
    }
}
