<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <title>离落</title>
    <meta name="renderer" content="webkit">
    <meta http-equiv="Cache-Control" content="no-siteapp"/>

    {{--<link rel="icon" type="image/png" href="{{ asset('default/i/favicon.png') }}">--}}
    <meta name="mobile-web-app-capable" content="yes">
    {{--<link rel="icon" sizes="192x192" href="{{ asset('default/i/app-icon72x72@2x.png') }}">--}}
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="apple-mobile-web-app-title" content="Amaze UI"/>
    {{--<link rel="apple-touch-icon-precomposed" href="{{ asset('default/i/app-icon72x72@2x.png') }}">--}}
    <meta name="msapplication-TileImage" content="assets/i/app-icon72x72@2x.png">
    <meta name="msapplication-TileColor" content="#0e90d2">
    <link rel="stylesheet" href="{{ asset('default/css/amazeui.min.css') }}">
    <link rel="stylesheet" href="{{ asset('default/css/app.css') }}">


</head>

<body id="blog">

<!-- <header class="am-g am-g-fixed blog-fixed blog-text-center blog-header">
    <div class="am-u-sm-8 am-u-sm-centered">
        <img width="200" src="http://s.amazeui.org/media/i/brand/amazeui-b.png" alt="Amaze UI Logo"/>
        <h2 class="am-hide-sm-only">中国首个开源 HTML5 跨屏前端框架</h2>
    </div>
</header>
<hr> -->
<!-- nav start -->
<nav class="am-g am-g-fixed blog-fixed blog-nav">
    <button class="am-topbar-btn am-topbar-toggle am-btn am-btn-sm am-btn-success am-show-sm-only blog-button" data-am-collapse="{target: '#blog-collapse'}" ><span class="am-sr-only">导航切换</span> <span class="am-icon-bars"></span></button>

    <div class="am-collapse am-topbar-collapse" id="blog-collapse">
        <ul class="am-nav am-nav-pills am-topbar-nav">
            <li class="am-active"><a href="{{ url("/") }}">首页</a></li>
            <li class="am-dropdown" data-am-dropdown>

            </li>

            <li><a href="{{ url("/image") }}">图片库</a></li>
            {{--<li><a href="lw-article-fullwidth.html">全宽页面</a></li>--}}
            {{--<li><a href="lw-timeline.html">存档</a></li>--}}
        </ul>
        <form class="am-topbar-form am-topbar-right am-form-inline" role="search" action="{{ route('search') }}">
            <div class="am-form-group">
                <input type="text" class="am-form-field am-input-sm" placeholder="搜索">
            </div>
        </form>
    </div>
</nav>
<hr>
<!-- content srart -->
<div class="am-g am-g-fixed blog-fixed blog-content">
  <figure data-am-widget="figure" class="am am-figure am-figure-default "   data-am-figure="{  pureview: 'true' }">
      <div id="container">
          <div><img src="{{ asset('default/images/01.jpg') }}"><h3>Agfa</h3></div>
          <div><img src="{{ asset('default/images/02.jpg') }}"><h3>Auto</h3></div>
          <div><img src="{{ asset('default/images/03.jpg') }}"><h3>Bald eagle</h3></div>
          <div><img src="{{ asset('default/images/04.jpg') }}"><h3>Black swan</h3></div>
          <div><img src="{{ asset('default/images/05.jpg') }}"><h3>Book shelf</h3></div>
          <div><img src="{{ asset('default/images/06.jpg') }}"><h3>Camera</h3></div>
          <div><img src="{{ asset('default/images/07.jpg') }}"><h3>Camera</h3></div>
          <div><img src="{{ asset('default/images/08.jpg') }}"><h3>Vintage camera</h3></div>
          <div><img src="{{ asset('default/images/09.jpg') }}"><h3>Coffee</h3></div>
          <div><img src="{{ asset('default/images/10.jpg') }}"><h3>Cookies</h3></div>
          <div><img src="{{ asset('default/images/11.jpg') }}"><h3>Cubes</h3></div>
          <div><img src="{{ asset('default/images/12.jpg') }}"><h3>DJ</h3></div>
          <div><img src="{{ asset('default/images/13.jpg') }}"><h3>Doors</h3></div>
          <div><img src="{{ asset('default/images/14.jpg') }}"><h3>Matchbox</h3></div>
          <div><img src="{{ asset('default/images/15.jpg') }}"><h3>Freiburg</h3></div>
          <div><img src="{{ asset('default/images/16.jpg') }}"><h3>Henna</h3></div>
          <div><img src="{{ asset('default/images/17.jpg') }}"><h3>Home office</h3></div>
          <div><img src="{{ asset('default/images/18.jpg') }}"><h3>iPad</h3></div>
          <div><img src="{{ asset('default/images/19.jpg') }}"><h3>Keyboard</h3></div>
          <div><img src="{{ asset('default/images/20.jpg') }}"><h3>Lynx</h3></div>
          {{--<div><img src="{{ asset('default/images/21.jpg') }}"><h3>Mac</h3></div>--}}
          {{--<div><img src="{{ asset('default/images/22.jpg') }}"><h3>Notebook</h3></div>--}}
          {{--<div><img src="{{ asset('default/images/23.jpg') }}"><h3>Thoughts</h3></div>--}}
          {{--<div><img src="{{ asset('default/images/24.jpg') }}"><h3>Office</h3></div>--}}
          {{--<div><img src="{{ asset('default/images/25.jpg') }}"><h3>Children</h3></div>--}}
          {{--<div><img src="{{ asset('default/images/26.jpg') }}"><h3>Portrait</h3></div>--}}
          {{--<div><img src="{{ asset('default/images/27.jpg') }}"><h3>Startup</h3></div>--}}
          {{--<div><img src="{{ asset('default/images/28.jpg') }}"><h3>Sun</h3></div>--}}
          {{--<div><img src="{{ asset('default/images/29.jpg') }}"><h3>The Eiffel Tower</h3></div>--}}
          <div><img src="{{ asset('default/images/30.jpg') }}"><h3>Water drops</h3></div>

    </div>
  </figure>

</div>
<!-- content end -->
 <footer class="blog-footer">
    <div class="am-g am-g-fixed blog-fixed am-u-sm-centered blog-footer-padding">
        <div class="am-u-sm-12 am-u-md-4- am-u-lg-4">
            <h3>模板简介</h3>
            <p class="am-text-sm">这是一个使用amazeUI做的简单的前端模板。<br> 博客/ 资讯类 前端模板 <br> 支持响应式，多种布局，包括主页、文章页、媒体页、分类页等<br>嗯嗯嗯，不知道说啥了。外面的世界真精彩<br><br>
            Amaze UI 使用 MIT 许可证发布，用户可以自由使用、复制、修改、合并、出版发行、散布、再授权及贩售 Amaze UI 及其副本。</p>
        </div>
        <div class="am-u-sm-12 am-u-md-4- am-u-lg-4">
            <h3>社交账号</h3>
            <p>
                <a href=""><span class="am-icon-qq am-icon-fw am-primary blog-icon blog-icon"></span></a>
                <a href=""><span class="am-icon-github am-icon-fw blog-icon blog-icon"></span></a>
                <a href=""><span class="am-icon-weibo am-icon-fw blog-icon blog-icon"></span></a>
                <a href=""><span class="am-icon-reddit am-icon-fw blog-icon blog-icon"></span></a>
                <a href=""><span class="am-icon-weixin am-icon-fw blog-icon blog-icon"></span></a>
            </p>
            <h3>Credits</h3>
            <p>我们追求卓越，然时间、经验、能力有限。Amaze UI 有很多不足的地方，希望大家包容、不吝赐教，给我们提意见、建议。感谢你们！</p>
        </div>
        <div class="am-u-sm-12 am-u-md-4- am-u-lg-4">
              <h1>我们站在巨人的肩膀上</h1>
            <h3>我的技能树</h3>
            <p>
            <ul>
                <li>PHP</li>
                <li>Laravel</li>
                <li>Html</li>
                <li>Css</li>
                <li>Jquery</li>
                <li>Objective-C</li>
            </ul>
            </p>
        </div>
    </div>
    <div class="blog-text-center">© 2015 AllMobilize, Inc. Licensed under MIT license. Made with love By LWXYFER</div>
  </footer>


<!--[if (gte IE 9)|!(IE)]><!-->
<script src="{{asset('default/js/jquery.min.js')}}"></script>
<!--<![endif]-->
<!--[if lte IE 8 ]>
<script src="http://libs.baidu.com/jquery/1.11.3/jquery.min.js"></script>
<script src="http://cdn.staticfile.org/modernizr/2.8.3/modernizr.js"></script>
<script src="{{ asset('default/js/amazeui.ie8polyfill.min.js') }}"></script>
<![endif]-->
<script src="{{asset('default/js/amazeui.min.js')}}"></script>
<script src="{{asset('default/js/pinto.min.js')}}"></script>
<script src="{{asset('default/js/img.js')}}"></script>
</body>
</html>
