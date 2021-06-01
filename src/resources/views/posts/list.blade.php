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
            <p><a class="button is-primary" href="{{ route('post.create') }}">追加</a></p>
            <div class="columns">
                <div class="column is-full">
                    @foreach ($posts as $post)
                        <article class="box">
                            <h1><a href="{{ route('post.detail', ['id' => $post->id]) }}">{{ $post->title }}</a></h1>
                            <p>投稿者: {{ $post->author }}</p>
                            <p> 作成⽇: {{ date("Y/m/d H:i:s", strtotime($post->created_at)) }}</p>
                            <p> 更新⽇: {{ date("Y/m/d H:i:s", strtotime($post->updated_at)) }}</p>
                            <p>
                                <a class="button is-primary" href="{{ route('post.update', ['id' => $post->id]) }}"> 編集</a>
                                <a class="button is-primary" href="{{ route('post.delete', ['id' => $post->id]) }}"> 削除</a>
                            </p>
                        </article>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</body>
</html>
