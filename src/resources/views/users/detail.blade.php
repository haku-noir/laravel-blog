@extends('layouts.app')
@section('content')
<div class="row justify-content-center mb-4">
    <div class="col-md-8">
        <div class="card">
            <div class="card-body">
                <div class="row mb-3">
                    <h4 class="card-title">{{ $user->name }}</h4>
                    <p class="card-text">{{ $user->email }}</p>
                    <p class="card-subtitle">登録⽇: {{ date("Y/m/d H:i:s", strtotime($user->created_at)) }}</p>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row justify-content-center mb-4">
    @foreach ($posts as $post)
        <x-post-card :post="$post">
        </x-post-card>
    @endforeach
    <div class="d-flex justify-content-center">
        {{ $posts->links() }}
    </div>
</div>
<div class="row justify-content-center mb-0">
    <div class="col-md-8">
        <button type="button" class="btn btn-link" onClick="history.back()">
            {{ __('戻る') }}
        </button>
    </div>
</div>
@endsection
