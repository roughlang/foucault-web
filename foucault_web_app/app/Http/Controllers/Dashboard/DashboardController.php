<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
  private $user;

  public function __construct(Request $request) {
    $this->middleware(function ($request, $next) {
      /* check login */
      if (Auth::check()) {
        $this->user = Auth::user();
      } else {
          return redirect()->route('login');
      }
      return $next($request);
    });
  }

  public function index(Request $request) {
    return view('dashboard/index')->with('user', $this->user);
  }
}
