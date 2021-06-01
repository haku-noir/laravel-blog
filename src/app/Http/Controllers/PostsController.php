<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostsController extends Controller
{
    public function list()
    {
        $posts = Post::all(); // すべての投稿を取得
        return view('posts.list', [
            'posts' => $posts
        ]);
    }

    // 新規登録フォーム表⽰
    public function create()
    {
        return view('posts.create');
    }

    // フォームに⼊⼒されたデータをDBに登録
    public function create_send(Request $request)
    {
        $post = new Post();
        $post->author = 1;
        $post->title = $request->title;
        $post->content = $request->content;
        $post->save();
        return redirect(route('post.list'));
    }
}
