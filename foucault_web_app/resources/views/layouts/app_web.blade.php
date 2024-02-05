<!DOCTYPE html>
<html lang="ja">
<head>
  <!-- Goole Tag Manager -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=G-WLR91KBHV5"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'G-WLR91KBHV5');
  </script>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="env" content="{{config('app.env')}}">
  @if($__env->yieldContent('robots') === '')<meta name="robots" content="index,follow">@else<meta name="robots" content="@yield('robots')">@endif
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <link rel="canonical" href="{{ request()->url() }}">
  <meta name="msapplication-square70x70logo" content="/assets/favicons/site-tile-70x70.png">
  <meta name="msapplication-square150x150logo" content="/assets/favicons/site-tile-150x150.png">
  <meta name="msapplication-wide310x150logo" content="/assets/favicons/site-tile-310x150.png">
  <meta name="msapplication-square310x310logo" content="/assets/favicons/site-tile-310x310.png">
  <meta name="msapplication-TileColor" content="/assets/favicons/#0078d7">
  <link rel="shortcut icon" type="image/vnd.microsoft.icon" href="/assets/favicons/favicon.ico">
  <link rel="icon" type="image/vnd.microsoft.icon" href="/assets/favicons/favicon.ico">
  <link rel="apple-touch-icon" sizes="57x57" href="/assets/favicons/apple-touch-icon-57x57.png">
  <link rel="apple-touch-icon" sizes="60x60" href="/assets/favicons/apple-touch-icon-60x60.png">
  <link rel="apple-touch-icon" sizes="72x72" href="/assets/favicons/apple-touch-icon-72x72.png">
  <link rel="apple-touch-icon" sizes="76x76" href="/assets/favicons/apple-touch-icon-76x76.png">
  <link rel="apple-touch-icon" sizes="114x114" href="/assets/favicons/apple-touch-icon-114x114.png">
  <link rel="apple-touch-icon" sizes="120x120" href="/assets/favicons/apple-touch-icon-120x120.png">
  <link rel="apple-touch-icon" sizes="144x144" href="/assets/favicons/apple-touch-icon-144x144.png">
  <link rel="apple-touch-icon" sizes="152x152" href="/assets/favicons/apple-touch-icon-152x152.png">
  <link rel="apple-touch-icon" sizes="180x180" href="/assets/favicons/apple-touch-icon-180x180.png">
  <link rel="icon" type="image/png" sizes="36x36" href="/assets/favicons/android-chrome-36x36.png">
  <link rel="icon" type="image/png" sizes="48x48" href="/assets/favicons/android-chrome-48x48.png">
  <link rel="icon" type="image/png" sizes="72x72" href="/assets/favicons/android-chrome-72x72.png">
  <link rel="icon" type="image/png" sizes="96x96" href="/assets/favicons/android-chrome-96x96.png">
  <link rel="icon" type="image/png" sizes="128x128" href="/assets/favicons/android-chrome-128x128.png">
  <link rel="icon" type="image/png" sizes="144x144" href="/assets/favicons/android-chrome-144x144.png">
  <link rel="icon" type="image/png" sizes="152x152" href="/assets/favicons/android-chrome-152x152.png">
  <link rel="icon" type="image/png" sizes="192x192" href="/assets/favicons/android-chrome-192x192.png">
  <link rel="icon" type="image/png" sizes="256x256" href="/assets/favicons/android-chrome-256x256.png">
  <link rel="icon" type="image/png" sizes="384x384" href="/assets/favicons/android-chrome-384x384.png">
  <link rel="icon" type="image/png" sizes="512x512" href="/assets/favicons/android-chrome-512x512.png">
  <link rel="icon" type="image/png" sizes="36x36" href="/assets/favicons/icon-36x36.png">
  <link rel="icon" type="image/png" sizes="48x48" href="/assets/favicons/icon-48x48.png">
  <link rel="icon" type="image/png" sizes="72x72" href="/assets/favicons/icon-72x72.png">
  <link rel="icon" type="image/png" sizes="96x96" href="/assets/favicons/icon-96x96.png">
  <link rel="icon" type="image/png" sizes="128x128" href="/assets/favicons/icon-128x128.png">
  <link rel="icon" type="image/png" sizes="144x144" href="/assets/favicons/icon-144x144.png">
  <link rel="icon" type="image/png" sizes="152x152" href="/assets/favicons/icon-152x152.png">
  <link rel="icon" type="image/png" sizes="160x160" href="/assets/favicons/icon-160x160.png">
  <link rel="icon" type="image/png" sizes="192x192" href="/assets/favicons/icon-192x192.png">
  <link rel="icon" type="image/png" sizes="196x196" href="/assets/favicons/icon-196x196.png">
  <link rel="icon" type="image/png" sizes="256x256" href="/assets/favicons/icon-256x256.png">
  <link rel="icon" type="image/png" sizes="384x384" href="/assets/favicons/icon-384x384.png">
  <link rel="icon" type="image/png" sizes="512x512" href="/assets/favicons/icon-512x512.png">
  <link rel="icon" type="image/png" sizes="16x16" href="/assets/favicons/icon-16x16.png">
  <link rel="icon" type="image/png" sizes="24x24" href="/assets/favicons/icon-24x24.png">
  <link rel="icon" type="image/png" sizes="32x32" href="/assets/favicons/icon-32x32.png">
  <link rel="manifest" href="/assets/favicons/manifest.json">
  <link rel="stylesheet" href="/assets/css/_main.css?mode=@php echo mt_rand(100,999); @endphp" media="screen">
  <script type="text/javascript" src="/assets/js/bootstrap5.min.js"></script>
  <script type="text/javascript" src="/assets/js/jquery/jquery-3.6.0.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/lazyload@2.0.0-rc.2/lazyload.min.js"></script>
  
  {{-- <script type="text/javascript" src="/assets/resource/vue/vue-3.3.4.global.min.js"></script> --}}
  {{-- <script type="text/javascript" src="/assets/js/vue/vue.js"></script> --}}
  {{-- <script type="text/javascript" src="/assets/js/vue/axios.min.js"></script> --}}
  {{-- <script type="text/javascript" src="/assets/js/vue/axios.js"></script> --}}
  {{-- <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script> --}}  
  {{-- <script type="text/javascript" src="/assets/js/vue/vue.js"></script> --}}
  {{-- <script type="text/javascript" src="/assets/js/vue/axios.min.js"></script> --}}
  {{-- <script type="text/javascript" src="/assets/js/vue/axios.js"></script> --}}
  {{-- <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script> --}}
  
  <script type="text/javascript" src="/assets/js/vue/vue.js"></script>
  <script type="text/javascript" src="/assets/js/vue/axios.js"></script>

  <title>@yield('title') | Roughlang</title>
  <meta name="description" content="@yield('description')">
</head>
<body>
  <div class="main footerFixed">
    @yield('content')
    
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