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
            @yield('content')
        </div>
    </div>
</body>
</html>
