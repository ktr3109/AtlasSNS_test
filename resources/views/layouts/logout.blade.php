<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
  <!--IEブラウザ対策-->
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="description" content="ページの内容を表す文章" />
  <title></title>
  <link rel="stylesheet" href="{{ asset('css/reset.css') }} ">
  <link rel="stylesheet" href="{{ asset('css/logout.css') }} ">
  <!--スマホ,タブレット対応-->
  <meta name="viewport" content="width=device-width,initial-scale=1" />
  <!--サイトのアイコン指定-->
  <link rel="icon" href="{{ asset('images/favicon/favicon_16.png') }}" sizes="16x16" type="image/png" />
  <link rel="icon" href="{{ asset('images/favicon/favicon_32.png') }}" sizes="32x32" type="image/png" />
  <link rel="icon" href="{{ asset('images/favicon/favicon_48.png') }}" sizes="48x48" type="image/png" />
  <link rel="icon" href="{{ asset('images/favicon/favicon_64.png') }}" sizes="64x64" type="image/png" />
  <!--iphoneのアプリアイコン指定-->
  <link rel="apple-touch-icon-precomposed" href="画像のURL" />
  <!--OGPタグ/twitterカード-->
</head>
<body>
  <header>
    <h1><img src="{{ asset('images/atlas.png') }}"></h1>
    <p class="header_SNS">Social Network Service</p>
  </header>
  <div class="container">
    @yield('content')
  </div>
  <script src="JavaScriptファイルのURL"></script>
  <script src="JavaScriptファイルのURL"></script>
</body>
</html>