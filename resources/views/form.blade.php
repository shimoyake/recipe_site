@extends("base")

@section("main")

    <div class="wrapper">
    <div class="header"><h1>投稿ページ</h1></div>
    <div class="content_wrapper">
    <div class="content2">

        <form action="/newpostsend" method="post" enctype="multipart/form-data">
            @csrf
            <p>タイトル</p>
            <input type="text" name="title" class="formtitle">

            <p>&nbsp;</p>
            <p>本文</p>
            <textarea name="main" cols="40" rows="10"></textarea>

            <p>&nbsp;</p>
            <p>画像をアップロード</p>
            <input type="file" name="post_img">

            <p>&nbsp;</p>
            <input type="submit" class="submitbtn">
        </form>

    </div>
    </div>
    </div>
    @endsection
