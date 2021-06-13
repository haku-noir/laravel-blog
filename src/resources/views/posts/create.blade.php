<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <title>Laravel Sample Blog</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.2/css/bulma.min.css">
</head>
<body>
    <header class="hero is-primary">
        <div class="hero-body">
            <div class="container">
                <h1 class="title"><a href="{{ route('post.list') }}" class="has-textwhite">Laravelサンプルブログ</a></h1>
                <h2 class="subtitle">サンプルアプリケーションです。</h2>
            </div>
        </div>
    </header>
    <div class="section">
        <div class="container">
            <h1 class="title">新規投稿</h1>
            <form method="POST" action="/blog/create/">
                @csrf
                <b>タイトル</b><br>
                <input name="title" value="" placeholder="タイトルを⼊⼒してください。"><br><br>

                <b>本⽂</b><br>
                <textarea cols="50" rows="15" name="content" placeholder="本⽂を⼊⼒してください。"></textarea><br>

                <input type="submit" class="button is-primary" value="送信">
                <a class="button is-primary" href="{{ route('post.list') }}"> キャンセル</a>
            </form>
        </div>
    </div>
</body>
</html>
