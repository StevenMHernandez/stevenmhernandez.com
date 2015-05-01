<?php namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;
use Laravel\Lumen\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Session;

class ContactController extends BaseController
{
    public function send(Request $request)
    {
        $v = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required',
        ]);

        if ($v->fails()) {
            return redirect($request->session()->previousUrl() . "#contact")->withErrors($v->errors());
        } else {
            $input = Input::all();
            $ip = $request->getClientIp();
            Mail::send('emails.contact', compact('input', 'ip'), function($message) use($input) {
                $message->from($input['email'], $input['name']);
                $message->to(env('CONTACT_EMAIL'), env('CONTACT_NAME'))->subject('Contact Form . ' . $input['name']);
            });
            Session::flash('success', 'Your message has been sent.');
            return redirect($request->session()->previousUrl() . "#contact");
        }
    }
}
