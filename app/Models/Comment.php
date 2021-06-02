<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Post;

class Comment extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'email', 'body'
    ];




    public function post()
    {
      return $this->belongsTo(Post::class);
    }

}
