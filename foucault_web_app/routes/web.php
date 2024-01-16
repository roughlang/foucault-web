<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
  return view('welcome');
});

/**
 * Authentication and Login
 */
Auth::routes();
Route::get('/register/temp_complete', [App\Http\Controllers\Auth\AuthStaticPageSampleController::class, 'registerTempComplete'])->name('register_temp_complete');
Route::get('/email_authentication', [App\Http\Controllers\Auth\AuthStaticPageSampleController::class, 'emailAuthenticatione'])->name('email_authentication');

/**
 * Gard
 */
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


/**
 * Local and dev only
 * APP_ENV local|dev|stg|prod
 */
if (config('app.env') == 'local' || config('app.env') == 'dev') {
  /**
   * このページにアクセスするとサンプルメールが飛びます
   */
  Route::get('/sample/common_mail', [App\Http\Controllers\Sample\SampleCommonMailController::class, 'index'])->name('sample_common_mail');

  /**
   * メール認証のテンプレート開発のプレビュー用
   */
  Route::get('/preview-mail', function () {
    $title = 'メール認証';
    $body = <<< EOM
  <h1>Roughlang</h1>
  <p>
  この度は、ラフ・ラング ユーザー登録いただきありがとうございました。<br>
  以下のURLをクリックし、登録時より24時間以内にログインしてください。<br>
  <a href="xxxxxx" target="_blank">https://roughlang.com/mail_auth?mode=auth&hash=c6490ccdfafcc35798a7ee136dc3638ed79da8bb3d74167c09...</a><br>
  24時間を超過した場合はログインできません。最初から登録をやり直してください。<br>
  </p>
EOM;
    return (new App\Mail\CommonSendMail($title, $body))->render();
  });
}

