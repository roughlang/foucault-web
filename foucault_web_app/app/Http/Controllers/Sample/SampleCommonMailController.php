<?php

namespace App\Http\Controllers\Sample;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Mail\CommonSendMail;
use Illuminate\Support\Facades\Mail;

class SampleCommonMailController extends Controller
{
  /**
   * Display a listing of the resource.
   */
  public function index()
  {
    # 送信先のエイリアスを作成
    $tempid =mt_rand(100, 999);
    $email = 'roughlangx+'.$tempid.'@gmail.com';

    $title = 'メールタイトル';
    $body = '送信テキスト';
    Mail::to($email)
      ->cc('cc-user@example.com')
      ->bcc('bcc-user@example.com')
      ->send(new CommonSendMail($title, $body));
    return "foobar";
  }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
