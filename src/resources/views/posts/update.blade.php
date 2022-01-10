@extends('posts.layout')
@section('content')
<h1 class="title">編集</h1>
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<form method="POST" action="/blog/update/{{ $post->id }}">
    @csrf
    <b>タイトル</b><br>
    <input name="title" value="{{ $post->title }}"><br><br>

    <b>本⽂</b><br>
    <textarea cols="50" rows="15" name="content">{{ $post->content }}</textarea><br>

    <input type="submit" class="button is-primary" value="送信">
    <a class="button is-primary" href="{{ route('post.list') }}"> キャンセル</a>
</form>
@endsection
