<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <title>Laravel Sample Blog</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>
    <div>
        <h1 class="bg-success"><a href="/">Laravel Sample Blog</a></h1>
    </div>
    <h2>新規投稿</h2>
    <form method="POST" action="/blog/create/">
        @csrf
        タイトル<br>
        <input name="title" value="" placeholder="タイトルを⼊⼒してください。"><br><br>

        本⽂<br>
        <textarea cols="50" rows="15" name="content" placeholder="本⽂を⼊⼒してください。"></textarea><br>

        <input type="submit" class="btn btn-primary btn-sm" value="送信">
    </form>
</body>
</html>
