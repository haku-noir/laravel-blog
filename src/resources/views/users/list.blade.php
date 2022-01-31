@extends('layouts.app')
@section('content')
<h1 class="display-4 text-center">Users</h1>
<div class="row justify-content-center">
  @foreach ($users as $user)
    <x-user-card :user="$user">
    </x-user-card>
  @endforeach
  <p class="text-center">{{ $users->links() }}</p>
</div>
@endsection
