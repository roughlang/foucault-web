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
  <meta name="msapplication-square70x70logo" content="/assets/resource/favicons/site-tile-70x70.png">
  <meta name="msapplication-square150x150logo" content="/assets/resource/favicons/site-tile-150x150.png">
  <meta name="msapplication-wide310x150logo" content="/assets/resource/favicons/site-tile-310x150.png">
  <meta name="msapplication-square310x310logo" content="/assets/resource/favicons/site-tile-310x310.png">
  <meta name="msapplication-TileColor" content="/assets/resource/favicons/#0078d7">
  <link rel="shortcut icon" type="image/vnd.microsoft.icon" href="/assets/resource/favicons/favicon.ico">
  <link rel="icon" type="image/vnd.microsoft.icon" href="/assets/resource/favicons/favicon.ico">
  <link rel="apple-touch-icon" sizes="57x57" href="/assets/resource/favicons/apple-touch-icon-57x57.png">
  <link rel="apple-touch-icon" sizes="60x60" href="/assets/resource/favicons/apple-touch-icon-60x60.png">
  <link rel="apple-touch-icon" sizes="72x72" href="/assets/resource/favicons/apple-touch-icon-72x72.png">
  <link rel="apple-touch-icon" sizes="76x76" href="/assets/resource/favicons/apple-touch-icon-76x76.png">
  <link rel="apple-touch-icon" sizes="114x114" href="/assets/resource/favicons/apple-touch-icon-114x114.png">
  <link rel="apple-touch-icon" sizes="120x120" href="/assets/resource/favicons/apple-touch-icon-120x120.png">
  <link rel="apple-touch-icon" sizes="144x144" href="/assets/resource/favicons/apple-touch-icon-144x144.png">
  <link rel="apple-touch-icon" sizes="152x152" href="/assets/resource/favicons/apple-touch-icon-152x152.png">
  <link rel="apple-touch-icon" sizes="180x180" href="/assets/resource/favicons/apple-touch-icon-180x180.png">
  <link rel="icon" type="image/png" sizes="36x36" href="/assets/resource/favicons/android-chrome-36x36.png">
  <link rel="icon" type="image/png" sizes="48x48" href="/assets/resource/favicons/android-chrome-48x48.png">
  <link rel="icon" type="image/png" sizes="72x72" href="/assets/resource/favicons/android-chrome-72x72.png">
  <link rel="icon" type="image/png" sizes="96x96" href="/assets/resource/favicons/android-chrome-96x96.png">
  <link rel="icon" type="image/png" sizes="128x128" href="/assets/resource/favicons/android-chrome-128x128.png">
  <link rel="icon" type="image/png" sizes="144x144" href="/assets/resource/favicons/android-chrome-144x144.png">
  <link rel="icon" type="image/png" sizes="152x152" href="/assets/resource/favicons/android-chrome-152x152.png">
  <link rel="icon" type="image/png" sizes="192x192" href="/assets/resource/favicons/android-chrome-192x192.png">
  <link rel="icon" type="image/png" sizes="256x256" href="/assets/resource/favicons/android-chrome-256x256.png">
  <link rel="icon" type="image/png" sizes="384x384" href="/assets/resource/favicons/android-chrome-384x384.png">
  <link rel="icon" type="image/png" sizes="512x512" href="/assets/resource/favicons/android-chrome-512x512.png">
  <link rel="icon" type="image/png" sizes="36x36" href="/assets/resource/favicons/icon-36x36.png">
  <link rel="icon" type="image/png" sizes="48x48" href="/assets/resource/favicons/icon-48x48.png">
  <link rel="icon" type="image/png" sizes="72x72" href="/assets/resource/favicons/icon-72x72.png">
  <link rel="icon" type="image/png" sizes="96x96" href="/assets/resource/favicons/icon-96x96.png">
  <link rel="icon" type="image/png" sizes="128x128" href="/assets/resource/favicons/icon-128x128.png">
  <link rel="icon" type="image/png" sizes="144x144" href="/assets/resource/favicons/icon-144x144.png">
  <link rel="icon" type="image/png" sizes="152x152" href="/assets/resource/favicons/icon-152x152.png">
  <link rel="icon" type="image/png" sizes="160x160" href="/assets/resource/favicons/icon-160x160.png">
  <link rel="icon" type="image/png" sizes="192x192" href="/assets/resource/favicons/icon-192x192.png">
  <link rel="icon" type="image/png" sizes="196x196" href="/assets/resource/favicons/icon-196x196.png">
  <link rel="icon" type="image/png" sizes="256x256" href="/assets/resource/favicons/icon-256x256.png">
  <link rel="icon" type="image/png" sizes="384x384" href="/assets/resource/favicons/icon-384x384.png">
  <link rel="icon" type="image/png" sizes="512x512" href="/assets/resource/favicons/icon-512x512.png">
  <link rel="icon" type="image/png" sizes="16x16" href="/assets/resource/favicons/icon-16x16.png">
  <link rel="icon" type="image/png" sizes="24x24" href="/assets/resource/favicons/icon-24x24.png">
  <link rel="icon" type="image/png" sizes="32x32" href="/assets/resource/favicons/icon-32x32.png">
  <link rel="manifest" href="/assets/resource/favicons/manifest.json">
  <link rel="stylesheet" href="/assets/css/_main.css?mode=@php echo mt_rand(100,999); @endphp" media="screen">
  <script type="text/javascript" src="/assets/bootstrap5/js/bootstrap.min.js"></script>
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
  <main class="main">
    @yield('content')
  </main>

  <p id="page-top">
    <a href="#">
      <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-arrow-up-square-fill" viewBox="0 0 16 16">
        <path d="M2 16a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2zm6.5-4.5V5.707l2.146 2.147a.5.5 0 0 0 .708-.708l-3-3a.5.5 0 0 0-.708 0l-3 3a.5.5 0 1 0 .708.708L7.5 5.707V11.5a.5.5 0 0 0 1 0z"/>
      </svg>
    </a>
  </p>

  <script>
    $(function(){
      var pagetop = $('#page-top');
      pagetop.hide();
      $(window).scroll(function () {
        if ($(this).scrollTop() > 100) {
              pagetop.fadeIn();
        } else {
              pagetop.fadeOut();
        }
      });
      pagetop.click(function () {
        $('body, html').animate({ scrollTop: 0 }, 500);
        return false;
      });
    });
  </script>
  <script>lazyload();</script>
</body>
</html>