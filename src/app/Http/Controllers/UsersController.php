<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Post;
use Illuminate\Pagination\Paginator;

class UsersController extends Controller
{
    // ユーザページの表⽰
    public function detail($id)
    {
        $user = User::findOrFail($id);
        // ユーザが送信したした投稿のみの一覧を「最新投稿順（created_at カラムの降順）」に取得（ページネーションの有効化）
        $posts = Post::where('user_id', $id)->orderBy('created_at', 'desc')->paginate(5);
        return view('users.detail', [
            'user' => $user,
            'posts' => $posts
        ]);
    }
}
