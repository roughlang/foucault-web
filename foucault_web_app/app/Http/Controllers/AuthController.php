<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
// use App\Http\Requests\RegisterRequest;
use App\Http\Resources\UserResource;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;


use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Validator;
use App\Mail\EmailAuthenticate;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
  // ユーザー登録
  public function register(Request $request) {

    Log::channel('info')->info( $request );

    $validated = $request->validate([
      'name' => 'required|string|max:255'
    ]);

    $user = User::create([
      'name' => $request['name'],
      'email' => $request['email'],
      'password' => Hash::make($request['password']),
    ]);

    $token = $user->createToken('auth_token')->plainTextToken;
    
    $cookie = cookie('token', $token, 60 * 24); // 1日

    return response()->json([
      'user' => new UserResource($user),
    ])->withCookie($cookie);
  }

  // ログイン
  public function login(LoginRequest $request) {
    $data = $request->validated();

    $user = User::where('email', $data['email'])->first();

    if (!$user || !Hash::check($data['password'], $user->password)) {
      return response()->json([
        'message' => 'メールアドレスかパスワードが正しくありません'
      ], 401);
    }

    $token = $user->createToken('auth_token')->plainTextToken;

    $cookie = cookie('token', $token, 60 * 24);

    return response()->json([
      'user' => new UserResource($user),
    ])->withCookie($cookie);
  }

  // ログアウト
  public function logout(Request $request) {
    $request->user()->currentAccessToken()->delete();

    $cookie = cookie()->forget('token');

    return response()->json([
      'message' => 'ログアウトしました'
    ])->withCookie($cookie);
  }

  // ユーザー情報取得
  public function user(Request $request) {
    return new UserResource($request->user());
  }
}
