<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Validator;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    /**
     * Register a new user
     */
    public function register(Request $request)
    {
        $validate = Validator::make($request->all(), [
            'nip' => 'required',
            'address' => 'required',
            'phone' => 'required|numeric',
            'role_id' => 'required',
            'unit_id' => 'required',
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password'  => 'required|min:8|confirmed',
        ]);

        if ($validate->fails())
        {
            return response()->json([
                'status' => 'Registration error',
                'errors' => $validate->errors()
            ], 422);
        }

        $user = new User();
        $user->nip = $request->nip;
        $user->address = $request->address;
        $user->phone = $request->phone;
        $user->role_id = $request->role_id;
        $user->unit_id = $request->unit_id;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->save();

        return response()->json(['status' => 'Registration success'], 200);
    }

    /**
     * Login user and return a token
     */
    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');
        if ($token = $this->guard()->attempt($credentials)) {
            return response()->json(['status' => 'success','token' => $token], 200);
        }
        return response()->json(['status' => 'error'], 401);
    }

    /**
     * Logout User
     */
    public function logout()
    {
        $this->guard()->logout();
        return response()->json([
            'status' => 'success',
            'msg' => 'Logged out Successfully.'
        ], 200);
    }

    /**
     * Get authenticated user
     */
    public function user(Request $request)
    {
        $user = User::find(Auth::user()->id);
        return response()->json([
            'status' => 'success',
            'data' => $user
        ], 200);
    }

    /**
     * Refresh JWT token
     */
    public function refresh()
    {
        if ($token = $this->guard()->refresh()) {
            return response()
                ->json(['status' => 'successs', 'token' => $token], 200);
        }
        return response()->json(['error' => 'refresh_token_error'], 401);
    }

    /**
     * Return auth guard
     */
    private function guard()
    {
        return Auth::guard();
    }
}