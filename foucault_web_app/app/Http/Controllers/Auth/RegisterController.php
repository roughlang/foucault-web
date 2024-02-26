<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Log;
use Illuminate\Http\Request;
use App\Mail\CommonSendMail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\DB;

class RegisterController extends Controller
{
  /*
  |--------------------------------------------------------------------------
  | Register Controller
  |--------------------------------------------------------------------------
  |
  | This controller handles the registration of new users as well as their
  | validation and creation. By default this controller uses a trait to
  | provide this functionality without requiring any additional code.
  |
  */

  use RegistersUsers;

  /**
   * Where to redirect users after registration.
   *
   * @var string
   */
  protected $redirectTo = RouteServiceProvider::TEMPAUTH;
  // protected $redirectTo = RouteServiceProvider::TEMP;
  protected $userUniqueId;
  protected $ipAddress;
  protected $emailAuthHash;

  /**
   * Create a new controller instance.
   *
   * @return void
   */
  public function __construct()
  {
      $this->middleware('guest');
      $this->ipAddress = request()->ip();
  }

  /**
   * Get a validator for an incoming registration request.
   *
   * @param  array  $data
   * @return \Illuminate\Contracts\Validation\Validator
   */
  protected function validator(array $data)
  {
    $logLine = 'req:'.$this->ipAddress.' [/register] Submitting and passing validation.';
    Log::channel('auth')->info( $logLine );
    //$redirectTo
    // Log::channel('auth')->info( $this->redirectTo );

    return Validator::make($data, [
      'name' => ['required', 'string', 'min:3','max:32'],
      'email' => ['required', 'string', 'email', 'max:255','unique:users'],
      'password' => ['required', 'string', 'min:8', 'confirmed'],
    ],[
      'name.required' => 'ユーザー名（ニックネーム）を入力してください',
      'name.string' => '文字列で入力してください',
      'name.min' => '3文字以上で入力してください',
      'name.max' => '32文字以内で入力してください',
      'email.required' => 'Emailを入力してください',
      'email.string' => '文字列で入力してください',
      'email.email' => '正しいEmailを入力してください',
      'email.max' => '255文字以内で入力してください',
      'email.unique' => 'すでに登録されているEmailアドレスです',
      'password.required' => 'パスワードを入力してください',
      'password.string' => '文字列で入力してください',
      'password.min' => '8文字以上で入力してください',
      'password.confirmed' => 'パスワードが一致しません',
    ]);
  }

  /**
   * Create a new user instance after a valid registration.
   *
   * make userUniqueId
   * @param  array  $data
   * @return \App\Models\User
   */
  protected function create(array $data)
  {
    /**
     * userUniqueId
     */
    $length = 6;
    $characters = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $uniqueID = '';
    for ($i = 0; $i < $length; $i++) {
      $uniqueID .= $characters[rand(0, $charactersLength - 1)];
    }
    $this->userUniqueId = $data['name'].'@'.$uniqueID;

    /**
     * Email auth hash
     */
    $this->emailAuthHash = hash('sha3-512', rand(111111,999999).date("F j, Y \a\\t g:i A"));
    $authURL = config('app.url').'/email_authentication?hash='.$this->emailAuthHash.'&unique_id='.$uniqueID;
    $sitename = config('app.name');
    $expiration_mailauth = config('app.expiration_mailauth');

    /**
     * メールの送信
     */
    $title = 'メール認証';
    $body = <<< EOM
<h1>{$sitename}</h1>
<p>
この度は、{$sitename} ユーザー登録いただきありがとうございました。<br>
以下のURLをクリックし、登録時より{$expiration_mailauth}時間以内にログインしてください。<br>
<a href="{$authURL}" target="_blank">{$authURL}</a><br>
{$expiration_mailauth}時間を超過した場合はログインできません。最初から登録をやり直してください。<br>
</p>
EOM;    
    Mail::to($data['email'])
      // ->cc('roughlangx@gmail.com')
      ->bcc('roughlangx@gmail.com')
      ->send(new CommonSendMail($title, $body));

    /**
     * Logging
     */
    $jsonData = json_encode( $data , JSON_UNESCAPED_UNICODE) ;
    $logLine = 'req:'.$this->ipAddress.' [/register (post)] User\'s temporary registration has been completed. '.$jsonData;
    Log::channel('auth')->info( $logLine );


    /**
     * wordpress
     * 
     * ID
     * user_login
     * user_pass
     * user_nicename
     * user_email
     * user_url
     * user_registered
     * user_activation_key
     * user_status
     * display_name
     */
    $wp_users = DB::table('wprd871bea_users')->get();
    $wp_usermeta = DB::table('wprd871bea_usermeta')->get();
    Log::channel('auth')->info( $wp_users );
    
    dd($wp_users, $wp_usermeta);

    /**
     * 新規ユーザー登録
     */
    return User::create([
      'name' => $data['name'],
      'user_unique_id' => $this->userUniqueId,
      'email' => $data['email'],
      'password' => Hash::make($data['password']),
      'email_auth_hash' => $this->emailAuthHash,
      'avatar' => '',
      'banner' => '',
      'status' => 1,
      'level' => 'regular',
    ]);
  }

  // protected function registerTempComplete()
  // {
  //   /**
  //    * データベースで仮登録時しているユーザーかどうか確認する
  //    * 
  //    */

  //   return "register temporary complete.";
  // }

  // protected function registered(Request $request, $user)
  //   {
  //       // 登録後にユーザーを特定のページ（例：Thank Youページ）にリダイレクトする
  //       return redirect('/register/temp_complete?auth');
  //   }

  //   public function redirectPath()
  //   {
  //       return '/register/temp_complete?auth';
        
  //   }
}
