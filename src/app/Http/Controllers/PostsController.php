<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostsController extends Controller
{
    public function list()
    {
        // すべての投稿を「最新投稿順（created_at カラムの降順）」に取得
        $posts = Post::orderBy('created_at', 'desc')->get();
        return view('posts.list', [
            'posts' => $posts
        ]);
    }

    // 新規登録フォームの表⽰
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

    // 詳細ページの表⽰
    public function detail($id)
    {
        $post = Post::where('id', $id)->get();
        return view('posts.list', [
            'post' => $post
        ]);
    }
}
