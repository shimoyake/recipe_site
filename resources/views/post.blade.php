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
            <div class="container">
            @foreach($data as $datas)
            <section class="card">
                <div class="card-img">
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

                <div class="card-content">
                    <h1 class="card-title"><a href="/show/{{$datas->id}}">{{$datas->title}}</a></h1>
                    <p class="card-text">{!! nl2br($datas->foods) !!}</p>
                </div>

                
            </section>   
            @endforeach
            </div>
            {{ $data->links() }}

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