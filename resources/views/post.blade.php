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
            <h1>オウチレシピ</h1>
        </div>
        
        <div class ="container">
            @foreach($data as $datas)
            <div class="item">    
                <div class="grid">
                    <div class="recipe-img">
                        @if(file_exists(public_path().'/storage/post_img/'. $datas->id .'.jpg'))
                            <img src="/storage/post_img/{{ $datas->id }}.jpg">
                        @elseif(file_exists(public_path().'/storage/post_img/'. $datas->id .'.jpeg'))
                            <img src="/storage/post_img/{{ $datas->id }}.jpeg">
                        @elseif(file_exists(public_path().'/storage/post_img/'. $datas->id .'.png'))
                            <img src="/storage/post_img/{{ $datas->id }}.png">
                        @elseif(file_exists(public_path().'/storage/post_img/'. $datas->id .'.gif'))
                            <img src="/storage/post_img/{{ $datas->id }}.gif">
                        @endif
                    </div>
                    <p><a href="/show/{{$datas->id}}">{{$datas->title}}</a></p>
                    <p>{!! nl2br($datas->main) !!}</p>
                </div>
            </div>
            @endforeach
        </div>

        {{ $data->links() }}

        <div class="footer">
            <p>お問い合わせ</p>
        </div>
    </div>
    </body>
</html>