<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

# Classは処理のまとまりのこと、Modelはその処理の内容
class Users extends Model
{
    use HasFactory;

    public function Posts()
    {
# PostsというクラスがあることはPosts.phpに定義済み
        return $this->hasMany(Posts::class, 'user_id');
    }
}
