<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    // Post belongs to User
    public function user()
    {
        // 投稿を送信したユーザを返す
        return $this->belongsTo(User::class);
    }
}
