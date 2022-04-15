@extends("base")

@section("main")

    <div class="content">
    <h1>レシピを登録</h1>
    <div class="content_wrapper">
    <div class="content2">

        <form action="/newpostsend" method="post" enctype="multipart/form-data">
            @csrf
            <p>料理名</p>
            <input type="text" name="title" class="formtitle">

            <p>&nbsp;</p>
            <p>材料・作り方</p>
            <textarea name="main" placeholder="自分がわかる簡単なメモでOKです！"　cols="100" rows="10" style="width:70%;"></textarea>

            <p>&nbsp;</p>
            <p>画像をアップロード<br>(必須ではありません)</p>
            <input type="file" name="post_img">

            <p>&nbsp;</p>
            <input type="submit" class="submitbtn">
        </form>

    </div>
    </div>
    </div>
    @endsection
