<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Comment;

class Post extends Model
{
    use HasFactory;
    protected  $table = 'posts';/*可略*/

    protected $fillable = [
      'title',
      'content',
      'is_feature'
    ];

    public function post()
    {
        return $this-> belongsTo(Post::class);

    }
}
