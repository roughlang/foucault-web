<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SampleAPIController extends Controller
{
  public function test1(Request $request) {

    $test1StringJson = '{"personal_info": {"name": "山田太郎", "gender": "男性", "age": 28, "address": {"postal_code": "100-0001", "prefecture": "東京都", "city": "千代田区", "street_address": "丸の内1-1-1", "building_name": "東京中央ビルディング10F"}, "contact": {"phone_number": "03-1234-5678", "email": "taro.yamada@example.com"}, "occupation": "システムエンジニア", "hobbies": ["読書", "旅行", "写真撮影"]}}
    ';

    return $test1StringJson;
  }
}
