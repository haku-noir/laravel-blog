@props(['user'])

<div class="col-sm-6 col-md-4 my-2">
    <div class="card">
        <div class="card-body">
            <h5 class="card-header">{{ $user->name }}</h5>
            <div class="card-body">
                <p classe="card-subtitle">{{ $user->email }}</p>
                @if(isset($user->posts[0]))
                    <p class="card-text">最近の投稿: <a href="{{ route('post.detail', ['id' => $user->posts[0]->id]) }}" class="link-secondary">{{ $user->posts[0]->title }}</a></p>
                @endif
                <a href="{{ route('user.detail', ['id' => $user->id]) }}" class="btn btn-primary">表示</a>
            </div>
        </div>
    </div>
</div>
