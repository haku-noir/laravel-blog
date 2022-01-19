@extends('posts.layout')
@section('content')
<h1 class="title">新規投稿</h1>
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<form method="POST" action="/blog/create/">
    @csrf
    <b>タイトル</b><br>
    <input name="title" value="" placeholder="タイトルを⼊⼒してください。"><br><br>

    <b>本⽂</b><br>
    <textarea cols="50" rows="15" name="content" placeholder="本⽂を⼊⼒してください。"></textarea><br>
    <input type="hidden" name="user_id" value="{{ Auth::id() }}">
    <input type="submit" class="button is-primary" value="送信">
    <a class="button is-primary" href="{{ route('post.list') }}"> キャンセル</a>
</form>
@endsection
