@extends('posts.layout')
@section('content')
<div class="has-text-right">
    {{ Auth::user()->name }}(id={{ Auth::id() }})
    <form method="post" action="{{ route('logout') }}">
    @csrf
    <input type="submit" class="button is-info" value="ログアウト">
    </form>
</div>
<p><a class="button is-primary" href="{{ route('post.create') }}">追加</a></p>
<x-post-list :posts="$posts">
</x-post-list>
@endsection
