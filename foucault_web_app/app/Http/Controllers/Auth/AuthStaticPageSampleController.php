<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class AuthStaticPageSampleController extends Controller
{
  protected function registerTempComplete(Request $request)
  {

    return view('auth/register_temp_complete');
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

        dd($getUniqueId);

        return "emailAuthenticatione";
      } else {
        return redirect('/');
      }
    } else {
      return redirect('/');
    }
  }
}
