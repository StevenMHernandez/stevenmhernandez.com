<?php namespace App\Http\Controllers;

use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Request;
use Laravel\Lumen\Routing\Controller as BaseController;

class ImageController extends BaseController
{
    public function create()
    {
        $image = Request::file('image');
        $newName = Input::get('new_name');
        $directory = '/assets/uploads/images/';
        $fileName = str_random(4) . '_'. urlencode($image->getClientOriginalName());
        $image->move(getcwd() . $directory, urlencode($newName));
        return $directory . urlencode($newName);
    }
}
