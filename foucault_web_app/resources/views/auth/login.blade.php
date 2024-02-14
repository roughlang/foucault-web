@extends('layouts.app_web')
@section('title', 'ログイン | Roughlang/ラフラング')
@section('description', 'ログイン | Roughlang/ラフラング')
@section('robots', 'index,follow')

@section('content')
@include('layouts.header')

<div class="container login mt50" id="app">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="card">
        <div class="card-header">{{ __('Login') }}</div>
        @{{sample}}

          <div class="card-body">
            <form method="POST" action="{{ route('login') }}" novalidate @submit.prevent="submitLoginForm" ref="loginForm">
              @csrf
              <div class="row mb-3">
                <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>
                <div class="col-md-6">
                  <input
                    id="email"
                    v-model="email"
                    type="email"
                    class="form-control
                    @error('email') is-invalid @enderror"
                    name="email"
                    value="{{ old('email') }}" required autocomplete="email" autofocus>
                  @error('email')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>
              </div>

              <div class="row mb-3">
                <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>
                <div class="col-md-6">
                  <div class="input-group">
                    <input
                      id="password"
                      v-model="password"
                      type="password"
                      class="password form-control @error('password') is-invalid @enderror"
                      name="password"
                      autocomplete="current-password">
                    <div class="input-group-append password-eye">
                      <button id="togglePassword" class="btn btn-outline-secondary rounded-0 rounded-end password-eye-button" type="button">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-eye" viewBox="0 0 16 16">
                          <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z"/>
                          <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z"/>
                        </svg>
                      </button>
                    </div>
                
                    @error('password')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                  </div>
                </div>
                
              </div>

              <div class="row mb-3">
                <div class="col-md-6 offset-md-4">
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                    <label class="form-check-label" for="remember">
                      {{ __('Remember Me') }}
                    </label>
                  </div>
                </div>
              </div>

              <div class="row mb-0">
                <div class="col-md-8 offset-md-4">
                  <button type="submit" class="btn btn-primary">
                    {{ __('Login') }}
                  </button>

                  @if (Route::has('password.request'))
                    <a class="btn btn-link" href="{{ route('password.request') }}">
                      {{ __('Forgot Your Password?') }}
                    </a>
                  @endif
                </div>
              </div>

            </form>
          </div>

        </div>
      </div>
    </div>
  </div>
</div>

<div class="height-adjust-500"></div>
@include('layouts.footer')

<script>
  document.getElementById('togglePassword').addEventListener('click', function (e) {
    // パスワード入力フィールドの取得
    const passwordInput = document.getElementById('password');
    // アイコンの切り替えと入力タイプの切り替え
    if (passwordInput.type === 'password') {
      passwordInput.type = 'text';
      this.innerHTML = '<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-eye-slash" viewBox="0 0 16 16"><path d="M13.359 11.238C15.06 9.72 16 8 16 8s-3-5.5-8-5.5a7.028 7.028 0 0 0-2.79.588l.77.771A5.944 5.944 0 0 1 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.134 13.134 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755-.165.165-.337.328-.517.486l.708.709z"/><path d="M11.297 9.176a3.5 3.5 0 0 0-4.474-4.474l.823.823a2.5 2.5 0 0 1 2.829 2.829l.822.822zm-2.943 1.299.822.822a3.5 3.5 0 0 1-4.474-4.474l.823.823a2.5 2.5 0 0 0 2.829 2.829z"/><path d="M3.35 5.47c-.18.16-.353.322-.518.487A13.134 13.134 0 0 0 1.172 8l.195.288c.335.48.83 1.12 1.465 1.755C4.121 11.332 5.881 12.5 8 12.5c.716 0 1.39-.133 2.02-.36l.77.772A7.029 7.029 0 0 1 8 13.5C3 13.5 0 8 0 8s.939-1.721 2.641-3.238l.708.709zm10.296 8.884-12-12 .708-.708 12 12-.708.708z"/></svg>'; // パスワード表示時のアイコン
    } else {
      passwordInput.type = 'password';
      this.innerHTML = '<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-eye" viewBox="0 0 16 16"><path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z"/><path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z"/></svg>'; // パスワード非表示時のアイコン
    }
  });
</script>


<script>
  Vue.createApp({
    data() {
      return {
        // フォーム入力データ
        email: '',
        password: '',
        remember: false,
        sample: "foobar"
      }
    },
    methods: {
      // ログインフォームの送信処理
      submitLoginForm() {
        // Ajaxでの事前認証リクエスト
        console.log(this.email);
        console.log(this.password);

        let form = new FormData();
        form.append('email', this.email);
        form.append('password', this.password);
        axios.post('/api/auth/login', form)

        .then(response => {

          console.log(response.data);
          // console.log(response.data.success);
          this.$refs.loginForm.submit();
          if (response.data.success) {
            // Ajax通信が成功したら、フォームを通常の認証ルートに送信
            this.$refs.loginForm.submit();
          } else {
            // エラー処理: ユーザーにエラーメッセージを表示など
            //alert('認証に失敗しました。');
          }
        })
        .catch(error => {
          console.error('Error:', error);
          //alert('認証プロセス中にエラーが発生しました。');
        });
      }
    }
  }).mount('#app')
  </script>
  

@endsection
