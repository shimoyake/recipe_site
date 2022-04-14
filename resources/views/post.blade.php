<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>
        <link rel="stylesheet" href="{{asset('css/style.css')}}">
    </head>
    <body>
    <div class="wrapper">
        <div class="header">
            <h1>Laraサイト</h1>
        </div>
        <div class="sidebar">
            <p>ここがサイドバー</p>
        </div>

        @foreach($data as $datas)
        <div class="content">
        <h1>{{$datas->title}}</h1>
        <hr>
        <p>{{$datas->main}}</p>
        </div>
        @endforeach

        <div class="footer">
            <p>お問い合わせ</p>
        </div>
    </div>
    </body>
</html>