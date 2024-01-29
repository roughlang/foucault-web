@extends('layouts.app_web')
@section('title', 'サイトマップ | Roughlang（ラフラング）')
@section('description', 'ラフラングのサイトマップです')
@section('robots', 'index,follow')

@section('username')
    @if($user && $user->name)
        {{ $user->name }}
    @endif
@endsection

@section('content')
@include('layouts.header')

<div class="container contents-body site-map">

  <div class="breadcrumb">
    <ul>
      <li><a href="/">Home</a></li>
      <li>サイトマップ</li>
    </ul>
  </div>

  <div class="row">
    <h3 class="mb50">サイトマップ</h3>
    <div class="col-sm-6 col-md-4 col-lg-3">
      <div class="card mb20">
        <div class="card-header">
          <h5>Card footer</h5>
        </div>
        <ul class="list-group list-group-flush">
          <li class="list-group-item"><a href="">xxxxxxxxxxxxxxx</a></li>
          <li class="list-group-item"><a href="">xxxxxxxxxxxxxxx</a></li>
          <li class="list-group-item"><a href="">xxxxxxxxxxxxxxx</a></li>
        </ul>
      </div>
    </div>
    <div class="col-sm-6 col-md-4 col-lg-3">
      <div class="card mb20">
        <div class="card-header">
          <h5>Card footer</h5>
        </div>
        <ul class="list-group list-group-flush">
          <li class="list-group-item"><a href="">xxxxxxxxxxxxxxx</a></li>
          <li class="list-group-item"><a href="">xxxxxxxxxxxxxxx</a></li>
          <li class="list-group-item"><a href="">xxxxxxxxxxxxxxx</a></li>
        </ul>
      </div>
    </div>
    <div class="col-sm-6 col-md-4 col-lg-3">
      <div class="card mb20">
        <div class="card-header">
          <h5>Card footer</h5>
        </div>
        <ul class="list-group list-group-flush">
          <li class="list-group-item"><a href="">xxxxxxxxxxxxxxx</a></li>
          <li class="list-group-item"><a href="">xxxxxxxxxxxxxxx</a></li>
          <li class="list-group-item"><a href="">xxxxxxxxxxxxxxx</a></li>
        </ul>
      </div>
    </div>
    <div class="col-sm-6 col-md-4 col-lg-3">
      <div class="card mb20">
        <div class="card-header">
          <h5>Card footer</h5>
        </div>
        <ul class="list-group list-group-flush">
          <li class="list-group-item"><a href="">xxxxxxxxxxxxxxx</a></li>
          <li class="list-group-item"><a href="">xxxxxxxxxxxxxxx</a></li>
          <li class="list-group-item"><a href="">xxxxxxxxxxxxxxx</a></li>
        </ul>
      </div>
    </div>
    <div class="col-sm-6 col-md-4 col-lg-3">
      <div class="card mb20">
        <div class="card-header">
          <h5>Card footer</h5>
        </div>
        <ul class="list-group list-group-flush">
          <li class="list-group-item"><a href="">xxxxxxxxxxxxxxx</a></li>
          <li class="list-group-item"><a href="">xxxxxxxxxxxxxxx</a></li>
          <li class="list-group-item"><a href="">xxxxxxxxxxxxxxx</a></li>
        </ul>
      </div>
    </div>


    
  </div>
</div>

@include('layouts.footer')
@endsection