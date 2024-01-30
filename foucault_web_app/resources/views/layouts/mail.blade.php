<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html lang="ja">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <style type="text/css">
    @font-face {
      font-family: 'poppins';
      src: url('/assets/webfonts/Poppins/Poppins-Regular.ttf') format('truetype');
      font-weight: normal;
      font-style: normal;
    }
    h1 {
      font-family: 'poppins';
      color: #880000;
      color: #333333;
    }
    p a:link {
      color: #4682b4;
      text-decoration: none;
    }
    .footer ul {
      margin-left: -30px;
    }
    .footer ul li {
      display: inline-block;
      margin-right: 15px;
    }
    .footer ul li a:link, .footer ul li a:visited{
      color: #4682b4;
      text-decoration: none;
    }
  </style>
</head>
<body>
  @yield('body')
  <div class="footer">
    <ul>
      <li><a href="{{config('app.url')}}/">Home</a></li>
      <li><a href="{{config('app.url')}}/contact">Contact</a></li>
    </ul>
    <div>
━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━<br>
{{config('app.name')}} <br>
{{config('app.url')}}<br>
━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━<br>
機密情報に関する注意事項：このメールは、当サービスが指定した<br>
受信者のみが利用することを目的としたものです。<br>
万が一、あなたがこのメールの受信に関してお心当たりのない場合は、<br>
直ちに当サービスへのご連絡とメールの破棄をお願いいたします。<br>
――――――――――――――――――――――――――――<br>
Copyright (C) {{config('app.year')}} {{config('app.name')}}, Inc. All Rights Reserved.<br>
    </div> 
  </div class="footer">
</body>
</html>