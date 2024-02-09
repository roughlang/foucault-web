<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthJWTController extends Controller
{
  public function login(Request $request)
  {
    $credentials = $request->only(['email', 'password']);
    if (! $token = auth('api')->attempt($credentials)) {
      return response()->json(['error' => 'Unauthorized'], 401);
    }
    return $this->respondWithToken($token);
  }

  public function me()
  {
    return response()->json(auth('api')->user());
  }

  protected function respondWithToken($token)
  {
    return response()->json([
      'access_token' => $token,
      'token_type' => 'bearer',
      'expires_in' => auth('api')->factory()->getTTL() * 60
    ]);
  }
}
