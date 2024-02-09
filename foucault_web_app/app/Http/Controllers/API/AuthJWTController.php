<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class AuthJWTController extends Controller
{
  public function login(Request $request)
  {
    $credentials = $request->only(['email', 'password']);
    if (! $token = auth('api')->attempt($credentials)) {
      return response()->json(['error' => 'Unauthorized'], 401);
    }

    /* logging */
    $logLine = "hgehgoehgoehhgoegoe";
    Log::channel('auth')->info( $logLine );

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

  public function logout(Request $request) {

    /**
     * ログアウトはWEBの方から行う
     * /logout
     */
    abort(403);

    return true;
  }
  public function refresh(Request $request) {

    // return response()->json([
    //   'user' => Auth::user(),
    //   'authorization' => [
    //       'token' => Auth::refresh(),
    //       'type' => 'bearer',
    //   ]
    // ]);
    return response()->json([
      'access_token' => auth('api')->refresh(),
      'token_type' => 'bearer',
      'expires_in' => auth('api')->factory()->getTTL() * 60
    ]);
  }

}
