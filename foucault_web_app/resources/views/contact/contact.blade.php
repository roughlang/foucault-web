@extends('layouts.app_web')
@section('title', 'お問い合わせ | Roughlang（ラフラング）')
@section('description', 'お問い合わせ | Roughlang（ラフラング）')
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
    <div class="col-md-8">
      <div class="card">
        <div class="card-header">{{ __('Register') }}</div>

        <div class="card-body">
          <form method="POST" action="/contact/sended">
            @csrf

            <div class="row mb-3">
              <label for="contact_title" class="col-md-4 col-form-label text-md-end">お問い合わせタイトル</label>

              <div class="col-md-6">
                <input id="contact_title" type="text" class="form-control @error('contact_title') is-invalid @enderror" name="contact_title" value="{{ old('contact_title') }}">

                @error('contact_title')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                @enderror
              </div>
            </div>

            <div class="row mb-3">
              <label for="email" class="col-md-4 col-form-label text-md-end">メールアドレス</label>

              <div class="col-md-6">
                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}">

                @error('email')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                @enderror
              </div>
            </div>


            <div class="row mb-3">
              <label for="password-confirm" class="col-md-4 col-form-label text-md-end">お問い合わせ</label>

              <div class="col-md-6">
                <textarea class="form-control" id="password-confirm" rows="6"></textarea>
              </div>
            </div>

            <div class="row mb-0">
              <div class="col-md-6 offset-md-4">
                <button type="submit" class="btn btn-primary">
                  お問い合わせ送信
                </button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="height-adjust-300"></div>
@include('layouts.footer')
@endsection