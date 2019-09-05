<?php
namespace App\grubapi\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests;
use App;

class TestApiController extends Controller
{
    protected $parameter;
    /**
     * Get parameters instance from IOC container
     */
    public function __construct()
    {
        $this->parameter = App::make('parameters', ['parameter' => config('blog.blog.post')]);
    }

    /**
     * 
     * @param Request request
     * 
     * @return json object
     */

    public function showCuisine(Request $request) {
        $data = [
            'city' => $request->get('city')
        ];
        return $this->parameter
                    ->parameterRender()
                    ->showParameter($data);
    }

    public function testView() {
        $name = 'Moin';
        return view('view::test')->with('name', $name);
    }
}