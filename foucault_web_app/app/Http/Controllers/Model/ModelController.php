<?php

namespace App\Http\Controllers\Model;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ModelController extends Controller
{
  public function bootstrap()
  {
    return view('models/bootstrap')->with('boo', 'bar');
  }
}
