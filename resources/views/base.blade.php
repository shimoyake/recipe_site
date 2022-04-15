<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>
        <link rel="stylesheet" href="{{asset('css/style.css')}}">
    </head>

    <body>
        
        <div class="header">
            <a href="/index"><h1>オウチレシピ</h1></a>
            <p>自分用のレシピメモを作ろう</p>
        </div>

        <div class="wrapper">
            @yield("main")
            <!--他のblade.phpでsection(main)を書いている-->
            <!--ページごとに表示を内容を変える部分-->

            <div class="side">
                <div class="side_bar new_button">
                    <a href="/create">
                        <img src="https://icon-pit.com/wp-content/uploads/2019/02/memo_pen_icon_4641-300x300.png">
                        <p>新規作成</p></div>
                    </a>
                <div class="side_bar">
                    <p>機能追加予定<br>comming<br>soon</p>
                </div>
            </div>
        </div>
            
        <div class="footer">
            <p>2022/オウチレシピ</p>
        </div>
    
    </body>
</html>