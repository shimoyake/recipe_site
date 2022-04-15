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
            <h1>オウチレシピ</h1>
        </div>

        <div class="wrapper">
            @yield("main")
            <!--他のblade.phpでsection(main)を書いている-->
            <!--ページごとに表示を内容を変える部分-->

            <div class="side">
                <div class="side_bar new_button">新規作成</div>
                <div class="side_bar">
                    サイドバーです
                </div>
            </div>
        </div>
            
        <div class="footer">
            <p>お問い合わせ</p>
        </div>
    
    </body>
</html>