<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;
use Illuminate\Support\Facades\Validator;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Response;
use PHPOpenSourceSaver\JWTAuth\Facades\JWTAuth;
use Illuminate\Support\Facades\Log;

class LoginController extends Controller
{

  /*
  |--------------------------------------------------------------------------
  | Login Controller
  |--------------------------------------------------------------------------
  |
  | This controller handles authenticating users for the application and
  | redirecting them to your home screen. The controller uses a trait
  | to conveniently provide its functionality to your applications.
  |
  */

  use AuthenticatesUsers;

  /**
   * Where to redirect users after login.
   *
   * @var string
   */
  protected $redirectTo = RouteServiceProvider::DASHBOARD;

  /**
   * Create a new controller instance.
   *
   * @return void
   */
  public function __construct()
  {
    $this->middleware('guest')->except('logout');
  }

  protected function credentials(Request $request)
  {
    $validatedData = $request->validate([
      'email' => ['required', 'string', 'email', 'max:255'],
      'password' => ['required', 'string', 'min:8'],
    ],[
      'email.required' => 'Emailを入力してください',
      'email.string' => '文字列で入力してください',
      'email.email' => '正しいEmailを入力してください',
      'email.max' => '255文字以内で入力してください',
      'password.required' => 'パスワードを入力してください',
      'password.string' => '文字列で入力してください',
      'password.min' => '8文字以上で入力してください',
    ]);

    /* login authentication */
    return array_merge( 
    
      $request->only($this->username(), 'password'), /* 標準の条件 */
      [
        'status' => 2, /* 追加条件 */
      ] 
    );
  }

  /**
   * JWTからトークンを取得してCookieに格納しておく
   * （と思ったけど、これ現状使っていなくて、JS側でLocalStorageで実装している）
   * 2024-02-14
   * 
   * sendLoginResponse()
   * respondWithToken()
   */
  protected function sendLoginResponse(Request $request)
  {
    $credentials = $request->only(['email', 'password']);
    if (! $token = auth('api')->attempt($credentials)) {
        return abort(401);
    }
    $token = $this->respondWithToken($token);     
    Log::channel('auth')->info( $token );

     /**
      * wordpress 連携
      */




    return redirect($this->redirectTo);
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
