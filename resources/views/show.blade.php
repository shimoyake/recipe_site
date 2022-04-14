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

        <div class="content3">
        <p class="created">{{$data->created_at}}</p>
        <h1>{{$data->title}}</h1>
        <hr>
        <p>{!! nl2br($data->main)!!}</p>
        </div>

        <div class="footer">
            <p>お問い合わせ</p>
        </div>
    </div>
    </body>
</html> 