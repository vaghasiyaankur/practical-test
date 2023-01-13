<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Post;

class PostComment extends Model
{
    use HasFactory;

    protected $guarderd = ['id'];

    /**
     * relationship beetween post and post comment
     *
     * @return Relationship
     * 
     */
    public function post(){
        return $this->belongsTo(Post::class);
    }
}
