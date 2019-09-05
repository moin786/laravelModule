<?php
namespace App\Blog\Consumes;

use App\Blog\AbstractModel\AbstractConsumeModel;
use App\Blog\Models\Post;


class Posts extends AbstractConsumeModel
{
    public function showPosts()
    {
        $posts = Post::all();
        return response()->json($posts, 200);
    }
}