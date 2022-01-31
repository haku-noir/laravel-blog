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
            <div class="card-header">{{ __('新規投稿') }}</div>

            <div class="card-body">
                <form method="POST" action="{{ route('post.create_send') }}">
                    @csrf

                    <div class="row mb-3">
                        <label for="title" class="col-md-4 col-form-label text-md-end">{{ __('タイトル') }}</label>

                        <div class="col-md-6">
                            <input id="title" type="text" class="form-control" name="title" placeholder="タイトルを⼊⼒してください。" required autofocus>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="content" class="col-md-4 col-form-label text-md-end">{{ __('本文') }}</label>

                        <div class="col-md-6">
                        <textarea id="content" cols="50" rows="5" class="form-control" name="content" placeholder="本⽂を⼊⼒してください。" required></textarea>
                        </div>
                    </div>
                    <div class="row mb-0">
                        <div class="col-md-8 offset-md-4">
                            <input type="hidden" name="user_id" value="{{ Auth::id() }}">

                            <button type="submit" class="btn btn-primary">
                                {{ __('送信') }}
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
