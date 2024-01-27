<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class StaticPagesController extends Controller
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

  public function sitemap() {
    $re = \Common::hello();

    return view('pages/sitemap')->with([
      'page' => 'sitemap',
      'user' => $this->user,
      'datetime' => '2024-01-27 08:35',
    ]);
  }
}
