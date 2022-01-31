@extends('layouts.app')
@section('content')
<div class="row justify-content-center mb-2">
    <div class="col-md-8">
        <div class="card">
            <div class="card-header">{{ __('投稿削除確認') }}</div>

            <div class="card-body">
                <div class="row mb-3">
                    <h5 class="card-title">以下の投稿を本当に削除しますか？</h5>
                </div>
                <div class="row mb-0">
                    <div class="col-md-8 offset-md-4">
                        <a href="{{ route('post.delete', ['id' => $post->id]) }}" class="btn btn-danger">
                            {{ __('OK') }}
                        </a>

                        <button type="button" class="btn btn-link" onClick="history.back()">
                            {{ __('キャンセル') }}
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
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
                <div class="row mb-0">
                    <h5 class="card-title">{{ $post->content }}</h5>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
