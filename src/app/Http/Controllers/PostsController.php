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
}
