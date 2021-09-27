@extends('posts.layout')
@section('content')
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
@endsection
