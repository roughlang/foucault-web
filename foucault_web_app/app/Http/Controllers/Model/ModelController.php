<?php

namespace App\Http\Controllers\Model;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ModelController extends Controller
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

  public function bootstrap()
  {
    return view('models/bootstrap')->with([
      'page' => 'bootstrap',
      'user' => $this->user,
      'datetime' => '2024-01-29 16:46',
    ]);
  }
}
