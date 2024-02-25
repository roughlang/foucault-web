<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TopController extends Controller
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

  public function top() {
    return view('welcome')->with('user', $this->user);
    // return view('welcome')->with('user', $this->user);
  }
}
