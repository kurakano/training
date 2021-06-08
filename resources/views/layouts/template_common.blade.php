<!doctype html>
<html>
<head>
   <meta charset="utf-8"/>
   <title>@yield('title')</title>
   <link rel="stylesheet" href="{{ asset('/css/common.css') }}">
   <link rel="stylesheet" href="@yield('css')">
   <script src="{{ asset('js/jquery-3.6.0.min.js') }}"></script>
</head>

<body>
    
    <div id="header">
        <div id="logo">
            <a href="{{ action('TopController@index') }}"></a>
        </div>
        <div id="title">生写真まとめ</div>
        <div id="login">
            <a href="<?php echo url('/login'); ?>">log in</a>
        </div>
    </div>
    
    <div class="glovalNav">
        <ul>
            <li><a class="top" href="{{ action('TopController@index') }}">トップ<span>TOP</span></a></li>
            <li><a class="photo-list" href="{{ action('PhotoController@index') }}">写真一覧<span>PHOTO LIST</span></a></li>
            <li><a class="comp-list" href="{{ action('CompController@index') }}">コンプ一覧<span>COMPLETE LIST</span></a></li>
            <li><a class="register" href="{{ action('RegisterController@index') }}">登録<span>REGISTER</span></a></li>
            <li><a class="schedule" href="{{ action('ScheduleController@index') }}">スケジュール<span>SCHEDULE</span></a></li>
        </ul>
    </div>

    <main>
        
        <div class="localNavigation">
            <p class="title">乃木坂46<br>ONLINE WEB SHOP SITE</p>
            <a href="https://www.nogizaka46shop.com"><img src="{{ asset('img/common/online_shop.png') }}" width="300"></a>
            <p class="title">乃木坂46<br>ONLINE WEB SHOP Twitter</p>
            <a class="twitter-timeline" data-width="300" data-height="600" data-theme="light" href="https://twitter.com/nogizaka_goods?ref_src=twsrc%5Etfw">Tweets by nogizaka_goods</a>
            <p class="title">乃木坂46 公式 Twitter</p>
            <a class="twitter-timeline" data-width="300" data-height="600" data-theme="light" href="https://twitter.com/nogizaka46?ref_src=twsrc%5Etfw">Tweets by nogizaka46</a>
            <p class="title">INFORMATION</p>
            <a href="http://www.nogizaka46.com/"><img src="{{ asset('img/common/official_site.png') }}" width="300"></a>
            <a href="http://www.nogizaka46.com/news/2015/04/post-12257.php"><img src="{{ asset('img/common/nogichu.png') }}" width="300"></a>
        </div>

        @yield('content')
      
    </main>

    <footer class="footer">
        <p>Copyright © n.kurakano All Rights Reserved.</p>
    </footer>

    <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
    
</body>