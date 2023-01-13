<?php

namespace Database\Seeders;
use App\Models\Post;
use App\Models\PostComment;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i=0; $i<10; $i++){
            $post = new Post();
            $post->name = 'post '.($i + 1);
            $post->save();
        }

        $posts = Post::whereIn('id', [1, 4, 5, 7, 9, 10])->get();
        foreach($posts as $post){
            $postcomment = new PostComment();
            $postcomment->comment = $post->id.' Lorem Ipsum is simply dummy text of the printing and typesetting industry';
            $postcomment->post_id = $post->id;
            $postcomment->save();

            $postcomment = new PostComment();
            $postcomment->comment = $post->id.' Lorem Ipsum is simply dummy text of the printing and typesetting industry';
            $postcomment->post_id = $post->id;
            $postcomment->save();

            $postcomment = new PostComment();
            $postcomment->comment = $post->id.' Lorem Ipsum is simply dummy text of the printing and typesetting industry';
            $postcomment->post_id = $post->id;
            $postcomment->save();

        }
        
        $posts = Post::whereIn('id', [2, 3, 6, 8])->get();
        foreach($posts as $post){
            $postcomment = new PostComment();
            $postcomment->comment = $post->id.' Lorem Ipsum is simply dummy text of the printing and typesetting industry';
            $postcomment->post_id = $post->id;
            $postcomment->save();

        }
    }
}
