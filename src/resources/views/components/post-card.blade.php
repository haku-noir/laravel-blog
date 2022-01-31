@props(['post'])

<div class="col-sm-6 col-md-4 my-2">
    <div class="card">
        <div class="card-body">
            <h5 class="card-header">{{ $post->title }}</h5>
            <div class="card-body">
                <p class="card-text">投稿者: <a href="{{ route('user.detail', ['id' => $post->user->id]) }}" class="link-secondary">{{ $post->user->name }}</a></p>
                <p class="card-subtitle">作成⽇: {{ date("Y/m/d H:i:s", strtotime($post->created_at)) }}</p>
                <p class="card-text">更新⽇: {{ date("Y/m/d H:i:s", strtotime($post->updated_at)) }}</p>
                <p class="card-text">
                    <a href="{{ route('post.detail', ['id' => $post->id]) }}" class="btn btn-primary">表示</a>
                    @if ($post->user->id === Auth::user()->id)
                        <span class="pl-3">
                            <a href="{{ route('post.update', ['id' => $post->id]) }}" class="btn btn-outline-success">編集</a>
                            <a href="{{ route('post.confirm', ['id' => $post->id]) }}" class="btn btn-outline-danger">削除</a>
                        </span>
                    @endif
                </p>
            </div>
        </div>
    </div>
</div>
