<?php
namespace App\Blog\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests;
use App;

class TestApiController extends Controller
{
    protected $rescource;
    /**
     * Get parameters instance from IOC container
     */
    public function __construct()
    {
        $this->rescource = App::make('resources', ['resource' => config('blog.blog.post')]);
    }

    /**
     * 
     * @param Request request
     * 
     * @return json object
     */

    public function showPosts(Request $request) {
        return $this->rescource
                    ->renderResource()
                    ->showPosts();
    }

    public function testView() {
        $name = 'Moin';
        return view('view::test')->with('name', $name);
    }
}