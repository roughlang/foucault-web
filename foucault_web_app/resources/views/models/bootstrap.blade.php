@extends('layouts.app_web')
@section('title', 'Bootstrap テンプレート | Roughlang（ラフラング）')
@section('description', 'Bootstrapを使ったラフラングの開発用テンプレートです')
@section('robots', 'noindex,nofollow')

@section('content')
@include('layouts.header')


  <div class="container contents-body">
    <div class="breadcrumb">
      <ul>
        <li><a href="">Home</a></li>
        <li><a href="">カテゴリー</a></li>
        <li>このコンテンツ</li>
      </ul>
    </div>
    <div class="row">

      {{-- 3カラムsample --}}
      <div class="col-sm-4">
        <h3>3カラムsample</h3>
        <ul>
          <li><a href="">xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx</a></li>
          <li><a href="">xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx</a></li>
          <li><a href="">xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx</a></li>
        </ul>
      </div>
      <div class="col-sm-4">
        <h3>3カラムsample</h3>
        <ul>
          <li><a href="">xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx</a></li>
          <li><a href="">xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx</a></li>
          <li><a href="">xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx</a></li>
        </ul>
      </div>
      <div class="col-sm-4">
        <h3>3カラムsample</h3>
        <ul>
          <li><a href="">xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx</a></li>
          <li><a href="">xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx</a></li>
          <li><a href="">xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx</a></li>
        </ul>
      </div>

      {{-- 2カラムsample --}}
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

    </div>
  </div>
@include('layouts.footer')
@endsection