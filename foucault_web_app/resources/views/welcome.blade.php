@extends('layouts.app_web')
@section('title', 'Roughlang（ラフラング）')
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

<div class="top-banner">
  <div class="bg-body-tertiary p-3 p-sm-5 mb-4">
    <div class="container">
      <h1 class="display-4">ようこそ!</h1>
      <p>これは、シンプルなマーケティングや情報提供のためのテンプレート。ジャンボトロンと呼ばれる大きな吹き出しと3つのコンテンツをサポートしている。よりユニークなものを作成するための出発点として使用する。</p>
      <a class="btn btn-primary btn-lg" href="#" role="button">もっと学ぼう &raquo;</a>
    </div>
  </div>
</div>


<div class="container">
  <div class="row">
    <div class="col-md-4">
      <h2>見出し</h2>
      <p>この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。</p>
      <p><a class="btn btn-secondary" href="#" role="button">詳細を見る &raquo;</a></p>
    </div>
    <div class="col-md-4">
      <h2>見出し</h2>
      <p>この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。</p>
      <p><a class="btn btn-secondary" href="#" role="button">詳細を見る &raquo;</a></p>
    </div>
    <div class="col-md-4">
      <h2>見出し</h2>
      <p>この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。</p>
      <p><a class="btn btn-secondary" href="#" role="button">詳細を見る &raquo;</a></p>
    </div>
  </div>
</div>

<div class="container">
  <div class="row">
    <div class="col-md-4">
      <h2>見出し</h2>
      <p>この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。</p>
      <p><a class="btn btn-secondary" href="#" role="button">詳細を見る &raquo;</a></p>
    </div>
    <div class="col-md-4">
      <h2>見出し</h2>
      <p>この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。</p>
      <p><a class="btn btn-secondary" href="#" role="button">詳細を見る &raquo;</a></p>
    </div>
    <div class="col-md-4">
      <h2>見出し</h2>
      <p>この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。</p>
      <p><a class="btn btn-secondary" href="#" role="button">詳細を見る &raquo;</a></p>
    </div>
  </div>
</div>

<div class="container">
  <div class="row">
    <div class="col-md-4">
      <h2>見出し</h2>
      <p>この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。</p>
      <p><a class="btn btn-secondary" href="#" role="button">詳細を見る &raquo;</a></p>
    </div>
    <div class="col-md-4">
      <h2>見出し</h2>
      <p>この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。</p>
      <p><a class="btn btn-secondary" href="#" role="button">詳細を見る &raquo;</a></p>
    </div>
    <div class="col-md-4">
      <h2>見出し</h2>
      <p>この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。</p>
      <p><a class="btn btn-secondary" href="#" role="button">詳細を見る &raquo;</a></p>
    </div>
  </div>
</div>




@include('layouts.footer')
@endsection