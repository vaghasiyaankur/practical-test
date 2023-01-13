<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\PostComment;

class Post extends Model
{
    use HasFactory;

    protected $guarderd = ['id'];

    /**
     * relationship beetween post and post comment
     *
     * @return Relationship
     * 
     */
    public function post_comments(){
        return $this->hasmany(PostComment::class);
    }
}
