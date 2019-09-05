<?php
namespace App\Blog\Consumes;

use App\Blog\AbstractModel\AbstractConsumeModel;
use App\Post;


class Posts extends AbstractParameterModel
{
    public function showPosts($data)
    {
        $posts = Post::all();
        return response()->json($posts, 200);
    }
}