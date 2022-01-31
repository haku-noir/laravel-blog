<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Post;
use Illuminate\Pagination\Paginator;

class UsersController extends Controller
{
    //ユーザ一覧の表⽰
    public function list()
    {
        // すべてのユーザを「最新登録順（created_at カラムの降順）」に取得（ページネーションの有効化）
        $users = User::orderBy('created_at', 'desc')->paginate(6);
        return view('users.list', [
            'users' => $users
        ]);
    }

    // ユーザページの表⽰
    public function detail($id)
    {
        $user = User::findOrFail($id);
        // ユーザが送信した投稿の一覧を「最新投稿順（created_at カラムの降順）」に取得（ページネーションの有効化）
        $posts = Post::where('user_id', $id)->orderBy('created_at', 'desc')->paginate(6);
        return view('users.detail', [
            'user' => $user,
            'posts' => $posts
        ]);
    }
}
