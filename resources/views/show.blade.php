@extends("base")

    @section("main")
        <div class="content">
            <p>{{$data->created_at}}</p>
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
            @else (empty($datas->post_img))
                <img src="https://www.shoshinsha-design.com/wp-content/uploads/2020/05/noimage-760x460.png">
            @endif
        </div>
        
    @endsection
