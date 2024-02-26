<?php

namespace App\Library;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Facade;


/**
 * 
 */
class Common extends Facade
{
  public static function hello ()
  {
    return "hello";
  }
}
