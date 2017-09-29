<!doctype html>
<html lang="zh-CN">
<head>
  <meta charset="utf-8">
  <meta name="renderer" content="webkit">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>@yield('title','index')</title>
  <meta name="keywords" content="">
  <meta name="description" content="">
  <link rel="stylesheet" href="{{asset('/assets/home/css/bootstrap.min.css')}}" media="all" />
  <link rel="stylesheet" href="{{asset('/assets/home/css/nprogress.css')}}" media="all" />
  <link rel="stylesheet" href="{{asset('/assets/home/css/style.css')}}" media="all" />
  <link rel="stylesheet" href="{{asset('/assets/home/css/font-awesome.min.css')}}" media="all" />
  <link rel="apple-touch-icon-precomposed" href="images/icon.png">
  <link rel="shortcut icon" href="images/favicon.ico">
  <script src="{{asset('/assets/home/js/jquery-2.1.4.min.js')}}"></script>
  <script src="{{asset('/assets/home/js/nprogress.js')}}"></script>
  <script src="{{asset('/assets/home/js/jquery.lazyload.min.js')}}"></script>
  <!--[if gte IE 9]>
      <script src="{{asset('/assets/home/js/jquery-1.11.1.min.js')}}" type="text/javascript"></script>
      <script src="{{asset('/assets/home/js/html5shiv.min.js')}}" type="text/javascript"></script>
      <script src="{{asset('/assets/home/js/respond.min.js')}}" type="text/javascript"></script>
      <script src="{{asset('/assets/home/js/selectivizr-min.js')}}" type="text/javascript"></script>
    <![endif]-->
  <!--[if lt IE 9]>
      <script>window.location.href='upgrade-browser.html';</script>
    <![endif]-->
</head>

<body class="user-select">
  <!--header-->
   @include('home.layouts._header')
  <!--header-->
  <section class="container">
    <div class="content-wrap">
        @yield('content')
    </div>

    <!--right nav-->
    @include('home.layouts._right')
    <!--right nav-->
  </section>

  <!--footer-->
  @include('home.layouts._footer')
  <!--footer-->

  <script src="{{asset('/assets/home/js/bootstrap.min.js')}}"></script>
  <script src="{{asset('/assets/home/js/jquery.ias.js')}}"></script>
  <script src="{{asset('/assets/home/js/scripts.js')}}"></script>
</body>

</html>
