<?php

namespace App\Models;

use App\Models\Post;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;
    protected  $table = 'comments';/*可略*/

    public function post()
    {

        return $this->hasOne(Post::class);

    }
}
