@extends('posts.layout')
@section('content')
<div class="columns">
    <div class="column is-full">
        <article class="box">
            <h1>{{ $post->title }}</h1>
            <p>投稿者: {{ $post->author }}</p>
            <p> 作成⽇: {{ date("Y/m/d H:i:s", strtotime($post->created_at)) }}</p>
            <p> 更新⽇: {{ date("Y/m/d H:i:s", strtotime($post->updated_at)) }}</p>
            <p> </p>
            <h2 style="{padding: 10px;}">{{ $post->content }}</h2>
        </article>
        <a class="button is-primary" href="{{ route('post.list') }}"> 戻る</a>
    </div>
</div>
@endsection
