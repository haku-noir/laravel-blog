@extends('posts.layout')
@section('content')
<div class="columns">
    <div class="column is-full">
        <h3>以下の投稿を本当に削除しますか？</h3><br>
        <p>
            <a class="button is-primary" href="{{ route('post.delete', ['id' => $post->id]) }}"> OK</a>
            <a class="button is-primary" href="{{ route('post.list') }}"> キャンセル</a>
        </p><br>
        <article class="box">
            <h1>{{ $post->title }}</h1>
            <p>投稿者: {{ $post->author }}</p>
            <p> 作成⽇: {{ date("Y/m/d H:i:s", strtotime($post->created_at)) }}</p>
            <p> 更新⽇: {{ date("Y/m/d H:i:s", strtotime($post->updated_at)) }}</p><br>
            <h2 style="{padding: 10px;}">{{ $post->content }}</h2>
        </article>
    </div>
</div>
@endsection
