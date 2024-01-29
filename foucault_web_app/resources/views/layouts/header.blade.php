@php
  // var_dump($user);
@endphp

<div class="topbar"></div>
<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid nav-contents">
    <a class="navbar-brand" href="/">
      <img src="/assets/favicons/apple-touch-icon-60x60.png" alt="Bootstrap" width="24" height="24">
      <div class="site-name">Site name</div>
    </a>
    <div class="auth-area-sp">
      @auth
      <ul>
        <li><a href="/dashboard"><span class="username">username</span></a></li>
        <li><a href="/dashboard"><img src="https://placekitten.com/300/300" class="avator-img ml10"></a></li>
        <li>
          <a href="#" class="btn btn-link santen-menu" data-bs-toggle="modal" data-bs-target="#userSitebarModal">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-three-dots-vertical" viewBox="0 0 16 16">
              <path d="M9.5 13a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0m0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0m0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0"/>
            </svg>
          </a>
        </li>
      </ul>
      @endauth
      @guest
      <ul>
        <li class="login">
          <a href="/login" class="btn btn-outline-secondary btn-sm login-link" role="button" aria-disabled="true">Login</a>
        </li>
        <li class="register">
          <a href="/register" class="btn btn-secondary btn-sm ml10 register-link" role="button" aria-disabled="true">Signin</a>
        </li>
      </ul>
      @endguest
    </div>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M0 96C0 78.3 14.3 64 32 64H416c17.7 0 32 14.3 32 32s-14.3 32-32 32H32C14.3 128 0 113.7 0 96zM0 256c0-17.7 14.3-32 32-32H416c17.7 0 32 14.3 32 32s-14.3 32-32 32H32c-17.7 0-32-14.3-32-32zM448 416c0 17.7-14.3 32-32 32H32c-17.7 0-32-14.3-32-32s14.3-32 32-32H416c17.7 0 32 14.3 32 32z"/></svg>
      </span>
    </button>

    <div class="collapse navbar-collapse nav-menus" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/sitemap">Site map</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/contact">Contact</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            
            @if(config('app.env') == 'dev' || config('app.env') == 'local')
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="/model/bootstrap">/model/bootstrap</a></li>
            <li><a class="dropdown-item" href="/app">ReactJS top</a></li>
            @endif

          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled">Disabled</a>
        </li>
      </ul>
      
      <div class="auth-area">
        @auth
        <ul>
          <li><a href="/dashboard"><span class="username">@yield('username','no name')</span></a></li>
          <li><a href="/dashboard"><img src="https://placekitten.com/300/300" class="avator-img ml10"></a></li>
          <li>
            <a href="#" class="btn btn-link santen-menu" data-bs-toggle="modal" data-bs-target="#userSitebarModal">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-three-dots-vertical" viewBox="0 0 16 16">
                <path d="M9.5 13a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0m0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0m0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0"/>
              </svg>
            </a>
          </li>
        </ul>
        @endauth
        @guest
        <ul>
          <li class="login">
            <a href="/login" class="btn btn-outline-secondary btn-sm login-link" role="button" aria-disabled="true">Login</a>
          </li>
          <li class="register">
            <a href="/register" class="btn btn-secondary btn-sm ml10 register-link" role="button" aria-disabled="true">Signin</a>
          </li>
        </ul>
        @endguest
      </div>
      {{-- <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form> --}}
    </div>
  </div>
</nav>

<!-- Modal -->
<div class="modal fade users-side-menu" id="userSitebarModal" tabindex="-1" aria-labelledby="userSitebarModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-right">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="userSitebarModalLabel">Account</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <ul>
          <li><a href="/dashboard">ダッシュボード</a></li>
          <li>ユーザー情報変更</li>
          <li>履歴</li>
          <li><a href="{{ route('logout') }}"
            onclick="event.preventDefault();document.getElementById('logout-form').submit();">ログアウト</a></li>
        </ul>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
          @csrf
        </form>
      </div>
      <div class="modal-footer">
        <div class="user">
          <div class="avatar">
            <a href="/dashboard"><img src="https://placekitten.com/300/300" class="avator-img ml10"></a>
          </div>
          <div class="username">
            @php
              if (isset($user) && !empty($user->user_unique_id)) {
                list($name, $uniqueIDPostfix) = explode("@", $user->user_unique_id);
                echo $name;
              }
            @endphp
            <div class="uniqueidpostfix">
              @if(isset($uniqueIDPostfix))
                  @<span>{{ $uniqueIDPostfix }}</span>
              @endif
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>



