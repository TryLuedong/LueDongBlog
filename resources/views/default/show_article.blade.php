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
    <style>
        .am-pagination{
            text-align: center;

        }
        .am-pagination li{
            display: inline;
            width: 40px;
            height: 40px;
        }px
         #headImg{
             border-radius:100%;
         }
    </style>

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
<!-- nav end -->
<!-- banner start -->
<div class="am-g am-g-fixed blog-fixed am-u-sm-centered blog-article-margin">
    <div data-am-widget="slider" class="am-slider am-slider-b1" data-am-slider='{&quot;controlNav&quot;:false}' >
        <ul class="am-slides">
            <li>
                {{--<img src="{{ asset('default/i/b1.jpg') }}">--}}
                <img src="{{ asset('default/i/bg1.jpg') }}">
                <div class="blog-slider-desc am-slider-desc ">
                    <div class="blog-text-center blog-slider-con">
                        <h1 class="blog-h-margin"><a href="">业精于勤</a></h1>
                        <p>“业精于勤荒于嬉”，精深的业技靠的是勤学、刻苦努力，靠的是争分夺秒的勤学苦练才会有精深的技术。得在认真，失在随便。
                        </p>
                        <span class="blog-bor"> <?php echo date("Y年-m月-d日",time()); ?></span>
                        <br><br><br><br><br><br><br>
                    </div>
                </div>
            </li>
            <li>
                {{--<img src="{{ asset('default/i/b2.jpg') }}">--}}
                <img src="{{ asset('default/i/bg2.jpg') }}">
                <div class="am-slider-desc blog-slider-desc">
                    <div class="blog-text-center blog-slider-con">
                        <h1 class="blog-h-margin"><a href="">学无止境</a></h1>
                        <p>学习，探索，研究，从不了解到了解，从无知到掌握，到灵活运用，在不断的学习中加深认识。由浅入深，由表及里。
                        </p>
                        <span> <?php echo date("Y年-m月-d日",time()); ?></span>
                    </div>
                </div>
            </li>
            <li>
                {{--            <img src="{{ asset('default/i/b3.jpg') }}">--}}
                <img src="{{ asset('default/i/bg3.jpg') }}">
                <div class="am-slider-desc blog-slider-desc">
                    <div class="blog-text-center blog-slider-con">
                        <h1 class="blog-h-margin"><a href="">工匠精神</a></h1>
                        <p>精益求精，注重细节，追求完美和极致，不惜花费时间精力，孜孜不倦，反复改进产品，把99%提高到99.99%。
                        </p>
                        <span>  <?php echo date("Y年-m月-d日",time()); ?></span>
                    </div>
                </div>
            </li>
            <li>
                {{--<img src="{{ asset('default/i/b2.jpg') }}">--}}
                <img src="{{ asset('default/i/bg5.jpg') }}">
                <div class="am-slider-desc blog-slider-desc">
                    <div class="blog-text-center blog-slider-con">

                        <h1 class="blog-h-margin"><a href="">总在思考一句积极的话</a></h1>
                        <p>那时候刚好下着雨，柏油路面湿冷冷的，还闪烁着青、黄、红颜色的灯火。
                        </p>
                        <span> <?php echo date("Y年-m月-d日",time()); ?></span>
                    </div>
                </div>
            </li>
        </ul>
    </div>
</div>
<!-- banner end -->

<!-- content srart -->
<div class="am-g am-g-fixed blog-fixed">
    <div class="am-u-md-8 am-u-sm-12">

        {{--@foreach($articles as $article)--}}
            <article class="am-g blog-entry-article">
                <div class="am-u-lg-6 am-u-md-12 am-u-sm-12 blog-entry-img">
                    <img src="{{ asset('uploads/article') }}/{{ $article->article_pic}}" alt="" class="am-u-sm-12">
                </div>

                <div class="am-u-lg-6 am-u-md-12 am-u-sm-12 blog-entry-text">
                    <span><a href="{{ route('article',['id' => $article->id]) }}" class="blog-color">  {{$article->title}} &nbsp;</a></span>

                    <span>{{ date('Y-m-d', strtotime($article->created_at)) }}</span>

                    <p> {{$article->desc}}
                    </p>
                    <p><a href="" class="blog-continue">continue reading</a></p>
                </div>
            </article>
        <!-- UY BEGIN -->
        <div id="uyan_frame"></div>
        <script type="text/javascript" src="http://v2.uyan.cc/code/uyan.js?uid=2135121"></script>
        <!-- UY END -->
        {{--@endforeach--}}


        {{--<ul class="am-pagination" style="list-style: none;">--}}
            {{--{!! $article->links() !!}--}}
        {{--</ul>--}}

        {{--<ul class="am-pagination">--}}
        {{--<li class="am-pagination-prev"><a href="">&laquo; Prev</a></li>--}}
        {{--<li class="am-pagination-next"><a href="">Next &raquo;</a></li>--}}
        {{--</ul>--}}
    </div>
    <div class="am-u-md-4 am-u-sm-12 blog-sidebar">
        <div class="blog-sidebar-widget blog-bor">
            <h2 class="blog-text-center blog-title"><span>About ME</span></h2>
            <img src="{{ asset('default/i/head.jpg') }}" alt="about me" class="blog-entry-img " id="headImg" >
            <p>大三</p>
            <p>
                福建农林大学  软件工程
            </p><p>我不想成为一个庸俗的人。十年百年后，当我们死去，质疑我们的人同样死去，后人看到的是裹足不前、原地打转的你，还是一直奔跑、走到远方的我？</p>
        </div>
        <div class="blog-sidebar-widget blog-bor">
            <h2 class="blog-text-center blog-title"><span>Contact ME</span></h2>
            <p>
                <a href=""><span class="am-icon-qq am-icon-fw am-primary blog-icon"></span></a>
                <a href=""><span class="am-icon-github am-icon-fw blog-icon"></span></a>
                <a href=""><span class="am-icon-weibo am-icon-fw blog-icon"></span></a>
                <a href=""><span class="am-icon-reddit am-icon-fw blog-icon"></span></a>
                <a href=""><span class="am-icon-weixin am-icon-fw blog-icon"></span></a>
            </p>
        </div>
        <div class="blog-clear-margin blog-sidebar-widget blog-bor am-g ">
            <h2 class="blog-title"><span>TAG cloud</span></h2>
            <div class="am-u-sm-12 blog-clear-padding">
                @inject('tagPresenter', 'App\Presenters\TagPresenter')

                <?php $tagList = $tagPresenter->tagList();?>
                @if ($tagList)
                    @foreach ($tagList as $tl)
                        <span style="padding: 5px;">
                    <a class="blog-tag" href="{{ route('tag', ['id' => $tl->id]) }}" target="_blank">{{ $tl->tag_name }}</a>
                </span>
                    @endforeach
                @endif

            </div>
        </div>
        @inject('linkPresenter', 'App\Presenters\LinkPresenter')
        <div class="blog-sidebar-widget blog-bor">
            <h2 class="blog-title"><span>友情链接</span></h2>
            <ul class="am-list">
                <?php $links = $linkPresenter->linkList() ?>

                @if ($links)
                    @foreach ($links as $link)
                        <li >
                            <a href="{{ $link->url }}" target="_blank">{{ $link->name }}</a>
                        </li>
                    @endforeach
                @endif
                {{--<li><a href="#">每个人都有一个死角， 自己走不出来，别人也闯不进去。</a></li>--}}
                {{--<li><a href="#">我把最深沉的秘密放在那里。</a></li>--}}
                {{--<li><a href="#">你不懂我，我不怪你。</a></li>--}}
                {{--<li><a href="#">每个人都有一道伤口， 或深或浅，盖上布，以为不存在。</a></li>--}}
            </ul>
        </div>
    </div>
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
<script src="{{ asset('default/js/jquery.min.js') }}"></script>
<!--<![endif]-->
<!--[if lte IE 8 ]>
<script src="http://libs.baidu.com/jquery/1.11.3/jquery.min.js"></script>
<script src="http://cdn.staticfile.org/modernizr/2.8.3/modernizr.js"></script>
<script src="{{ asset('default/js/amazeui.ie8polyfill.min.js') }}"></script>
<![endif]-->
<script src="{{ asset('default/js/amazeui.min.js') }}"></script>
</body>
</html>
