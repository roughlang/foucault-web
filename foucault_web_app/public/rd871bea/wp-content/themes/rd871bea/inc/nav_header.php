<body>

<div id="nav">
  <?php if ( env('APP_ENV') == 'local' || env('APP_ENV') == 'dev') : ?>
  <div class="device-bar"></div>
  <?php endif; ?>
  <div class="mesage-bar">Roughlang 開業しました</div>

<?php
if (is_front_page() || is_home()) {
  $url = home_url();
} else if (is_page()) {
  $url = get_permalink();
} else if (is_archive()) {
  echo "archive: ";
  if (is_category()) {
    $category_id = get_query_var('cat');
    $url = get_category_link($category_id);
  } else if (is_tag()) {
    $tag_id = get_queried_object_id();
    $url = get_tag_link($tag_id);
  } else if (is_month()) {
    $year = get_query_var('year');
    $month = get_query_var('monthnum');
    $month_url = get_month_link($year, $month);
    $url = $month_url;
  }
} else if (is_single()) {
  $url = get_permalink();
} else if (is_search()) {
  $url = get_search_link(get_search_query());
} else {
  global $wp;
  $url = home_url($wp->request);
}
?>

  <nav class="navbar navbar-expand-sm navbar-light bg-white web-header">
    <div class="container-fluid">
      <!-- <h1>Roughlang</h1> -->
      <a class="navbar-brand" href="/"><img src="/assets/favicons/android-chrome-36x36.png" alt="Roughlang" class="site-icon"></a>
      <h1><a class="navbar-brand site-name" href="">Roughlang</a></h1>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="/store">Store</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/blog">Blog</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/about">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/contact">Contact</a>
          </li>
          
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              menu
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#">Action</a></li>
              <li><a class="dropdown-item" href="/system">System Blog</a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item" href="/sitemap">Site map</a></li>
            </ul>
          </li>
          <?php if (env('APP_ENV') == 'local' || env('APP_ENV') == 'dev'): ?>
            <!-- hoge -->
          <?php endif; ?>
        </ul>
      </div>

      <div class="account-area-pc">

        <a v-show="!login" href="/s/register" type="button" class="btn btn-signup btn-sm nav-signup-btn">Signup</a>
        <a v-show="!login" href="/s/login?currentUrl=<?php echo $url; ?>" type="button" class="btn btn-login btn-sm nav-login-btn ml10">Login</a>

        <div class="user_icon_area" v-show="login">
          <div class="user-name">{{user.name}}</div>
          <a href="/dashboard">
            <img src="https://strage-roughlang-a1.s3.ap-northeast-1.amazonaws.com/roughlang.jp/avatar/default.png" alt="user icon" class="ml10" aria-label="user icon">
          </a>
          <button type="button" class="btn btn-white account-area-menu-button" data-bs-toggle="modal" data-bs-target="#header-user-menu" aria-label="user menu" title="user menu">
            <svg id="nav-menu-sp" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="nav-menu bi bi-three-dots-vertical" viewBox="0 0 16 16"><path d="M9.5 13a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z"></path></svg>
          </button>
        </div>
      </div>
    </div>
  </nav>

  <div class="account-area-sp d-flex flex-row-reverse">
    <a class="btn btn-primary btn-sm btn-light btn-login nav-login-btn" href="/s/logi?currentUrl=<?php echo $url; ?>" role="button">Login</a>
    <a class="btn btn-primary btn-sm btn-dark btn-register mr10"href="/s/register" type="button" >Signup</a>
  </div>

</div><!-- id="nav" -->

