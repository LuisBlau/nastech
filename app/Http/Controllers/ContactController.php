<?php

namespace App\Http\Controllers;

use App\Mail\ContactUs;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function touch(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'message' => 'required',
            'email' => 'required|email',
            'g-recaptcha-response' => 'recaptcha',
        ]);

        Mail::to('info@simba.com')->send(new ContactUs($request->name, $request->email, $request->message));

        return response()->json(['response'=>'success', 'message' => "Please keep an eye out in your email {$request->email} for your customized invitation."]);
    }
}
