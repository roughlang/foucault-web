<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;

class AuthStaticPageSampleController extends Controller
{
  private $user;

  public function __construct(Request $request) {
    $this->middleware(function ($request, $next) {
      /* check login */
      if (Auth::check()) {
        $this->user = Auth::user();
      } else {
        $this->user = null;
      }
      return $next($request);
    });
  }

  protected function registerTempComplete(Request $request)
  {
    // ユーザーをログアウトさせる
    Auth::logout();

    // ここで、セッションを再生成することも推奨されています
    $request->session()->invalidate();
    $request->session()->regenerateToken();

    return view('auth/register_temp_complete')->with([
      'page' => 'emailAuthentication',
      'user' => null,
      'datetime' => '2024-01-31 01:07',
    ]);
  }

  //emailAuthenticatione
  protected function emailAuthenticatione(Request $request)
  {
    $hash = $request->query('hash');
    $unique_id = $request->query('unique_id');

    if (preg_match('/^[a-z0-9]{128}$/', $hash)) {
      // DBアクセス
      $users = DB::table('users')
        ->where('email_auth_hash', $hash)
        ->first();

      list($getName, $getUniqueId) = explode("@",$users->user_unique_id);

      if ($unique_id == $getUniqueId) {
        $affected = DB::table('users')
          ->where('user_unique_id', $users->user_unique_id)
          ->update(['status' => 2]);

        return view('auth/emailAuthentication')->with([
          'page' => 'emailAuthentication',
          'user' => $this->user,
          'datetime' => '2024-01-31 01:07',
        ]);

      } else {
        return redirect('/');
      }
    } else {
      return redirect('/');
    }
  }
}
