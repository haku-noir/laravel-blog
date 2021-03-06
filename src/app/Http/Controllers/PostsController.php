<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use Illuminate\Pagination\Paginator;

class PostsController extends Controller
{
    public function list()
    {
        // すべての投稿を「最新投稿順（created_at カラムの降順）」に取得（ページネーションの有効化）
        $posts = Post::orderBy('created_at', 'desc')->paginate(6);
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
        $validatedData = $request->validate([
            'title' => 'required|string|max:20',
            'content' => 'required|string|between:10,140',
        ]);
        $post = new Post();
        $post->user_id = $request->user_id;
        $post->title = $request->title;
        $post->content = $request->content;
        $post->save();
        return redirect(route('post.list'));
    }

    // 詳細ページの表⽰
    public function detail($id)
    {
        $post = Post::findOrFail($id);
        return view('posts.detail', [
            'post' => $post
        ]);
    }

    // 編集フォームの表⽰
    public function update($id)
    {
        $post = Post::findOrFail($id);
        return view('posts.update', [
            'post' => $post
        ]);
    }

    // フォームに⼊⼒されたデータにDBを更新
    public function update_send(Request $request, $id)
    {
        $validatedData = $request->validate([
            'title' => 'required|string|max:20',
            'content' => 'required|string|between:10,140',
        ]);
        $post = Post::findOrFail($id);
        $post->title = $request->title;
        $post->content = $request->content;
        $post->save();
        return redirect(route('post.list'));
    }

    // 削除の確認画面の表⽰
    public function confirm($id)
    {
        $post = Post::findOrFail($id);
        return view('posts.confirm', [
            'post' => $post
        ]);
    }

    // DBから投稿を削除
    public function delete($id)
    {
        $post = Post::findOrFail($id);
        $post->delete();
        return redirect(route('post.list'));
    }

}
