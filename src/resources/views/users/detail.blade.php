@extends('posts.layout')
@section('content')
<div class="has-text-right">
    {{ Auth::user()->name }}(id={{ Auth::id() }})
    <form method="post" action="{{ route('logout') }}">
    @csrf
    <input type="submit" class="button is-info" value="ログアウト">
    </form>
</div>
<br>
<div class="hero is-dark p-3">
    <h2 class="title has-textwhite">{{ $user->name }}</h2>
    <p class="has-textwhite">{{ $user->email }}</p>
</div>
<x-post-list :posts="$posts">
</x-post-list>
@endsection
