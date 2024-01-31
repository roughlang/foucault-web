<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;
use Illuminate\Support\Facades\Validator;

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

  // /**
  //  * Validate the user login request.
  //  *
  //  * @param  \Illuminate\Http\Request  $request
  //  * @return void
  //  */
  // protected function validateLogin(Request $request)
  // {
  //     $rules = [
  //         'email' => 'required|string', // 例えば 'email' => 'required|email'
  //         'password' => 'required|string|min:6', // パスワードの最小長を指定
  //     ];

  //     $customMessages = [
  //         'required' => 'The :attribute field is required.',
  //         // 他のカスタムメッセージをここに追加
  //     ];

  //     $request->validate($rules, $customMessages);
  //   }

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
    
      $request->only($this->username(), 'password'), // 標準の条件
      [
        'status' => 2,
      ] // 追加条件
    );
  }
}
