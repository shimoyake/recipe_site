<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>newsite</title>
<!-- Styles -->
<link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
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
</body>
</html> 