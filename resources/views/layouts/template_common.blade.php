<!doctype html>
<html>
<head>
   <meta charset="utf-8"/>
   <title>@yield('title')</title>
   <link rel="stylesheet" href="css/maltiColumn.css">
   <link rel="stylesheet" href="css/@yield('css').css">
</head>

<body>
    
    <div id="header">
        <div id="logo">
            <a href="#"></a>
        </div>
        <div id="title">生写真まとめ</div>
        <div id="login">
            <a href="#">log in</a>
        </div>
    </div>
    
    <div class="glovalNav">
        <ul>
            <li><a class="current" href="#">トップ<span>TOP</span></a></li>
            <li><a href="#">写真一覧<span>PHOTO LIST</span></a></li>
            <li><a href="#">コンプ一覧<span>COMPLETE LIST</span></a></li>
            <li><a href="#">写真登録<span>REGISTER</span></a></li>
            <li><a href="#">スケジュール<span>SCHEDULE</span></a></li>
            <li><a href="#">その他<span>OTHER</span></a></li>
        </ul>
    </div>

    <main>
        
        <div class="localNavigation">
        <!--     <p>ローカルナビゲーション</p> -->
        </div>

        @yield('content')
      
    </main>

    <footer class="footer">
        <p>Copyright © n.kurakano All Rights Reserved.</p>
    </footer>
    
</body>