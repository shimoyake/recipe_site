@extends("base")
<!--base.blade.phpの記載をそのまま引き継ぎできる-->

    @section("main")
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
                        @else (empty($datas->post_img))
                            <img src="https://www.shoshinsha-design.com/wp-content/uploads/2020/05/noimage-760x460.png">
                        @endif
                    </div>

                    <div class="card-content">
                        <h1 class="card-title"><a href="/show/{{$datas->id}}">{{$datas->title}}</a></h1>
                        <p class="card-text">{!! nl2br($datas->foods) !!}</p>
                    </div>
                    
                </section>   
            @endforeach
            {{ $data->links() }}
        </div>

            

    @endsection