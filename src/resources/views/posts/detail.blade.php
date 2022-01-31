@extends('layouts.app')
@section('content')
<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card">
            <div class="card-header">{{ $post->title }}</div>

            <div class="card-body">
                <div class="row mb-3">
                    <p class="card-text">投稿者: <a href="{{ route('user.detail', ['id' => $post->user->id]) }}" class="link-secondary">{{ $post->user->name }}</a></p>
                    <p class="card-subtitle">作成⽇: {{ date("Y/m/d H:i:s", strtotime($post->created_at)) }}</p>
                    <p class="card-text">更新⽇: {{ date("Y/m/d H:i:s", strtotime($post->updated_at)) }}</p>
                </div>
                <div class="row mb-3">
                    <h5 class="card-title">{{ $post->content }}</h5>
                </div>
                <div class="row mb-0">
                    <div class="col-md-8">
                        <button type="button" class="btn btn-link" onClick="history.back()">
                            {{ __('戻る') }}
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
