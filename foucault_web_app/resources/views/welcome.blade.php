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

  <div class="container contents-body">

  </div>
@include('layouts.footer')
@endsection