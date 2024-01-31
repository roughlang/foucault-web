@extends('layouts.app_web')
@section('title', 'ログイン | Roughlang/ラフラング')
@section('description', 'ログイン | Roughlang/ラフラング')
@section('robots', 'index,follow')

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

<div class="container mt50">
  <div class="row justify-content-center">
    <div class="col-md-auto">
      <div class="card register-temp-complete">
        <div class="card-body">
          <h5 class="card-title">メール認証が完了しました</h5>
          <p class="card-text">仮登録が完了しました。メールが送信されているので、指定のURLから本登録を完了させてください。</p>
          <a href="/" class="card-link">Home</a>
          <a href="/login" class="card-link">Login</a>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="height-adjust-400"></div>
@include('layouts.footer')
@endsection
