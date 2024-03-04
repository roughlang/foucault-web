<?php
  include("inc/common.php");
  include("inc/header.php");
?>

<body>
  <div class="main footerFixed">
    <div class="topbar"></div>
<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid nav-contents">
    <a class="navbar-brand" href="/">
      <img src="/assets/favicons/apple-touch-icon-60x60.png" alt="Bootstrap" width="24" height="24">
      <div class="site-name">Site name</div>
    </a>
    <div class="auth-area-sp">
            <ul>
        <li><a href="/dashboard"><span class="username">            ラフラング
    </span></a></li>
        <li><a href="/dashboard"><img src="/assets/img/avatar/guest_user_avatar.png" class="avator-img ml10"></a></li>
        <li>
          <a href="#" class="btn btn-link santen-menu" data-bs-toggle="modal" data-bs-target="#userSitebarModal">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-three-dots-vertical" viewBox="0 0 16 16">
              <path d="M9.5 13a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0m0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0m0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0"/>
            </svg>
          </a>
        </li>
      </ul>
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
            
                        <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="/model/bootstrap">/model/bootstrap</a></li>
            <li><a class="dropdown-item" href="/app">ReactJS top</a></li>
            <li><a class="dropdown-item" href="/api/sample_api/test1">api sample_api test1</a></li>
            <li><a class="dropdown-item" href="/rd871bea/">wordpress rd871bea</a></li>
            
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled">Disabled</a>
        </li>
      </ul>
      
      <div class="auth-area">
                <ul>
          <li><a href="/dashboard"><span class="username">            ラフラング
    </span></a></li>
          <li><a href="/dashboard"><img src="/assets/img/avatar/guest_user_avatar.png" class="avator-img ml10"></a></li>
          <li>
            <a href="#" class="btn btn-link santen-menu" data-bs-toggle="modal" data-bs-target="#userSitebarModal">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-three-dots-vertical" viewBox="0 0 16 16">
                <path d="M9.5 13a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0m0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0m0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0"/>
              </svg>
            </a>
          </li>
        </ul>
                      </div>
      
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
          <li><a href="http://localhost:8555/logout"
            onclick="event.preventDefault();document.getElementById('logout-form').submit();">ログアウト</a></li>
        </ul>
        <form id="logout-form" action="http://localhost:8555/logout" method="POST" class="d-none">
          <input type="hidden" name="_token" value="RveWbkJqyNseH8sGWEYqxwf5av4zcDmLolwNuahQ" autocomplete="off">        </form>
      </div>
      <div class="modal-footer">
        <div class="user">
          <div class="avatar">
            <a href="/dashboard"><img src="/assets/img/avatar/guest_user_avatar.png" class="avator-img ml10"></a>
          </div>
          <div class="username">
            ラフラング            <div class="uniqueidpostfix">
                                @<span>VN80FF</span>
                          </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>


<script>
  /**
   * PHPで認証の判定をしてその値をvueのプロパティーに格納。
   * 認証のステータスが非ログイン時の場合は、トークンを削除する。
   * 認証のステータスがログイン状態の場合は、トークンをローカルストレージに保存する。
   * これはReact側から認証トークンを見るためである。というのはblad側でログインしたのに、Reactに移動するとログイン状態が維持できないので、
   * あらかじめログイン時に認証トークンを保存しておく必要がある。 
   */
  //axsiosで認証トークンを取得しておく
  // Vue.createApp({
  //   data() {
  //     return {
  //       sample: 'Hello Vue.js 3',
  //       // APIから取得したデータを格納するためのプロパティ
  //       apiData: null,
  //     }
  //   },
  //   mounted() {
  //     // コンポーネントのマウント時にAPIからデータを取得
  //     this.fetchDataFromApi();
  //   },
  //   methods: {
  //     fetchDataFromApi() {
  //       // Axiosを使用してAPIリクエストを行う
  //       axios.get('https://your-api-url.com/data')
  //         .then(response => {
  //           // レスポンスデータをapiDataプロパティに格納
  //           this.apiData = response.data;
  //         })
  //         .catch(error => {
  //           console.error('APIからのデータ取得に失敗しました:', error);
  //         });
  //     }
  //   }
  // }).mount('#app')
</script>




<div class="container contents-body site-map">

  <div class="breadcrumb">
    <ul>
      <li><a href="/">Home</a></li>
      <li>xxxxxxxx</li>
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

<div class="height-adjust-200"></div>
<div class="footer">
  <div class="container">
    <div class="row">
      <div class="col-md-4">
        <ul>
          <li><a href="/sitemap">サイトマップ</a></li>
          <li><a href="/contact">お問い合わせ</a></li>
          <li><a href="">会社情報</a></li>
        </ul>
      </div>
      <div class="col-md-4">
        <ul>
          <li><a href="">サイトマップ</a></li>
          <li><a href="">お問い合わせ</a></li>
          <li><a href="">会社情報</a></li>
        </ul>
      </div>
      <div class="col-md-4">
        <ul>
          <li><a href="">サイトマップ</a></li>
          <li><a href="">お問い合わせ</a></li>
          <li><a href="">会社情報</a></li>
        </ul>
      </div>
    </div>
  </div>
  <div class="sns-list">
    <ul>
      <li><a href="">Facebook</a></li>
      <li><a href="">Twitter</a></li>
      <li><a href="">Instagram</a></li>
      <li><a href="">YouTube</a></li>
      <li><a href="">Line</a></li>
    </ul>
  </div>
  <div class="copy-right">© 2024 DUMMY, INC. All Rights Reserved</div>
</div>    
  </div>
  <p id="page-top">
    <a href="#">
      <img src="/assets/img/icon/backtop.png">
    </a>
  </p>

<script>
  const pageTopButton = document.getElementById('page-top');
  pageTopButton.addEventListener('click', (e) => {
    e.preventDefault();
    window.scrollTo({
      top: 0,
      behavior: 'smooth'
    });
  });
</script>
</body>
</html>