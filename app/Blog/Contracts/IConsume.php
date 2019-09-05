<?php
namespace App\grubapi\Contracts;

Interface IConsumer {

    /**
     * Show blog posts
     *
     * @return json object
     */
    public function showBlogs();

    /**
     * Undocumented function
     *
     * @param array $data
     * @return void
     */
    public function createBlog(array $data);

    /**
     * Undocumented function
     *
     * @param [type] $id
     * @return void
     */
    public function updateBlog($id);

    /**
     * Undocumented function
     *
     * @param [type] $id
     * @return void
     */
    public function deleteBlog($id);
}