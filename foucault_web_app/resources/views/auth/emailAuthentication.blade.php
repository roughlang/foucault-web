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

メール認証が完了しました。

@include('layouts.footer')
@endsection
