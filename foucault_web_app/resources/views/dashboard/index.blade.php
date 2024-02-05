@extends('layouts.app_web')
@section('title', 'テンプレート')
@section('description', 'ラフラングの開発用テンプレートです。')
@section('robots', 'noindex,nofollow')

{{-- @section('username', $user->name) --}}
@section('username')
    @if($user && $user->name)
        {{ $user->name }}
    @else
        {{-- ゲスト --}}
    @endif
@endsection

@section('content')
@include('layouts.header')


  <div class="container contents-body">

    <div class="breadcrumb">
      <ul>
        <li><a href="">Home</a></li>
        <li>Dashboard</li>
      </ul>
    </div>

    <div class="row mt50 mb50">
      {{-- 3カラムsample --}}
      <div class="col-sm-3">
        <?php // var_dump($user); ?>
        <h3>3カラムsample</h3>
        <ul>
          <li><a href="">Dashboard top</a></li>
          <li><a href="">ユーザー情報変更</a></li>
          <li><a href="">パスワード変更</a></li>
        </ul>
      </div>
      <div class="col-sm-7">
        <h3>3カラムsample</h3>
        <ul>
          <li><a href="">xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx</a></li>
          <li><a href="">xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx</a></li>
          <li><a href="">xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx</a></li>
        </ul>
      </div>
      <div class="col-sm-2">
        <h3>3カラムsample</h3>
        <ul>
          <li><a href="">xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx</a></li>
          <li><a href="">xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx</a></li>
          <li><a href="">xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx</a></li>
        </ul>
      </div>
    </div>

    {{-- <div class="row">
      2カラムsample
      <div class="col-sm-6">
        <h3>2カラムsample</h3>
        <ul>
          <li><a href="">xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx</a></li>
          <li><a href="">xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx</a></li>
          <li><a href="">xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx</a></li>
        </ul>
      </div>
      <div class="col-sm-6">
        <h3>2カラムsample</h3>
        <ul>
          <li><a href="">xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx</a></li>
          <li><a href="">xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx</a></li>
          <li><a href="">xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx</a></li>
        </ul>
      </div>
    </div> --}}

  </div><!-- container -->

@include('layouts.footer')
@endsection