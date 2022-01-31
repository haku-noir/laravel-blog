@extends('layouts.app')
@section('content')
<h1 class="display-4 text-center">Posts</h1>
<p>
  <a class="btn btn-lg btn-outline-primary" href="{{ route('post.create') }}">
    新規投稿
    <svg class="bi" width="18" height="18"><use xlink:href="/bootstrap-icons/bootstrap-icons.svg#send"></use></svg>
  </a>
</p>
<div class="row justify-content-center">
  @foreach ($posts as $post)
    <x-post-card :post="$post">
    </x-post-card>
  @endforeach
  <p class="text-center">{{ $posts->links() }}</p>
</div>
@endsection
