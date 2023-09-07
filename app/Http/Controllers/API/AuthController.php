<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use App\Helpers\AuthHelper;

class AuthController extends Controller
{
    protected function createNewToken($token)
    {
        return response()->json([
            'access_token' => $token,
            'token_type' => 'bearer',
            'expires_id' => auth('api')->factory()->getTTL() * 60,
            'user' => auth('api')->user()
        ]);
    }

    public function authenticate(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|string',
            'password' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }

        /* Attempt to authenticate w/ username*/
        // $user = AuthHelper::getAuthUserByEmailOrUsername(
        //     $request->only('email', 'password')
        // );
        $login_type = filter_var($request->email, FILTER_VALIDATE_EMAIL)
            ? 'email' : 'username';

        if (!($token = Auth::guard('api')->attempt([
                $login_type => $request->email,
                'password' => $request->password
        ]))) {
            return response()->json(['error' => 'Unauthorized'], 401);
        }

        return $this->createNewToken($token);
    }
}
