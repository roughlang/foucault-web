<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegisterRequest;
use App\Http\Resources\UserResource;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
  // ユーザー登録
  public function register(RegisterRequest $request) {
    $data = $request->validated();

    $user = User::create([
      'name' => $data['name'],
      'email' => $data['email'],
      'password' => Hash::make($data['password']),
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
