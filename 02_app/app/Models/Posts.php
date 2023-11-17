<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

# Classは処理のまとまりのこと、Modelはその処理の内容
class Posts extends Model
{
    use HasFactory;

    public function Users()
    {
        # PostsというクラスがあることはPosts.phpに定義済み
        return $this->belongsTo(Users::class);
    }
}
