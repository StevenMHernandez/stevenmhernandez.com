<?php namespace App\Http\Controllers;

use Illuminate\Support\Facades\Request;
use Laravel\Lumen\Routing\Controller as BaseController;

class ImageController extends BaseController
{
    public function create()
    {
        $image = Request::file('image');
        $directory = '/assets/uploads/images/';
        $fileName = str_random(4) . '_'. urlencode($image->getClientOriginalName());
        $image->move(getcwd() . $directory, $fileName);
        return $directory . $fileName;
    }
}
