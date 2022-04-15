@extends("base")

@section("main")
        <div class="content3">
        <p class="created">{{$data->created_at}}</p>
        <h1>{{$data->title}}</h1>
        <hr>
        <p>{!! nl2br($data->main)!!}</p>

        @if(file_exists(public_path().'/storage/post_img/'. $data->id .'.jpg'))
            <img src="/storage/post_img/{{ $data->id }}.jpg">
        @elseif(file_exists(public_path().'/storage/post_img/'. $data->id .'.jpeg'))
            <img src="/storage/post_img/{{ $data->id }}.jpeg">
        @elseif(file_exists(public_path().'/storage/post_img/'. $data->id .'.png'))
            <img src="/storage/post_img/{{ $data->id }}.png">
        @elseif(file_exists(public_path().'/storage/post_img/'. $data->id .'.gif'))
            <img src="/storage/post_img/{{ $data->id }}.gif">
        @endif
        </div>

        <a class="btn btn-outline-success" href="/edit/{{$data->id}}">編集</a>

                <form action="{{$data->id}}/" method="POST" style="display:inline-block;">
                    {{ csrf_field() }}
                    {{ method_field("delete") }}
                    <button class="btn btn-outline-danger" type="submit">削除</button>
                </form>
        
                @endsection
