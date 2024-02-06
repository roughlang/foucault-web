<?php

namespace App\Http\Controllers\Contact;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ContactController extends Controller
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

  public function contact(Request $request) {

    return view('contact/contact')->with([
      'page' => 'contact',
      'user' => $this->user,
      'datetime' => '2024-02-06 08:35',
    ]);
  }

  public function contactSended(Request $request) {
    dd($request);
    return view('contact/contact_sended')->with([
      'page' => 'contact_sended',
      'user' => $this->user,
      'datetime' => '2024-02-06 08:35',
    ]);
  }
}
