<?php

namespace App\Http\Controllers;

use App\Models\Email;
use App\Models\Subscribe;
use Illuminate\Http\Request;

class EmailController extends Controller
{

    public function SaveEmail(Request $request)
    {
        $data = $request->all();
        $email = new Email();
        $email->name = $data['name'];
        $email->email = $data['email'];
        $email->messege = $data['message'];
        $email->save();

        return redirect()->back()->with('success', 'your message,here');
//        return redirect()->back()->with(['message' => "Your Success Message", 'alert-type' => 'success']);
//        return redirect()->route('contact')->with('message','Data added Successfully');

    }

      public function SaveSubscriber(Request $request)
    {
        $data = $request->all();
        $email = new Subscribe();
        $email->email = $data['email'];
        $email->save();

     return redirect()->back()->with('success', 'your message,here');

    }
}
