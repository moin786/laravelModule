<?php
namespace App\Blog\Contracts;

Interface IConsume {

    /**
     * Show blog posts
     *
     * @return json object
     */
    public function showPosts();

    /**
     * Undocumented function
     *
     * @param array $data
     * @return void
     */
    public function createPost(array $data);

    /**
     * Undocumented function
     *
     * @param [type] $id
     * @return void
     */
    public function updatePost($id);

    /**
     * Undocumented function
     *
     * @param [type] $id
     * @return void
     */
    public function deletePost($id);
}