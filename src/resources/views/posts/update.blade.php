@extends('layouts.app')
@section('content')
@if ($errors->any())
    @foreach ($errors->all() as $error)
        <div class="alert alert-danger" role="alert">
            {{ $error }}
        </div>
    @endforeach
@endif
<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card">
            <div class="card-header">{{ __('投稿編集') }}</div>

            <div class="card-body">
                <form method="POST" action="{{ route('post.update_send', ['id' => $post->id]) }}">
                    @csrf

                    <div class="row mb-3">
                        <label for="title" class="col-md-4 col-form-label text-md-end">{{ __('タイトル') }}</label>

                        <div class="col-md-6">
                            <input id="title" type="text" class="form-control" name="title" value="{{ $post->title }}" required>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="content" class="col-md-4 col-form-label text-md-end">{{ __('本文') }}</label>

                        <div class="col-md-6">
                        <textarea id="content" cols="50" rows="5" class="form-control" name="content" required>{{ $post->content }}</textarea>
                        </div>
                    </div>
                    <div class="row mb-0">
                        <div class="col-md-8 offset-md-4">
                            <button type="submit" class="btn btn-success">
                                {{ __('更新') }}
                            </button>

                            <button type="button" class="btn btn-link" onClick="history.back()">
                                {{ __('キャンセル') }}
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
