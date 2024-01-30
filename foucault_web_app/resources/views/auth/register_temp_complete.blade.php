@extends('layouts.app_web')
@section('title', 'Bootstrap テンプレート | Roughlang（ラフラング）')
@section('description', 'Bootstrapを使ったラフラングの開発用テンプレートです')
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

仮登録完了

<div class="height-adjust-400"></div>
@include('layouts.footer')
@endsection