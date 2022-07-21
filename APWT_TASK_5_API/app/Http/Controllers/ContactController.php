<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Http\Requests\StoreContactRequest;
use App\Http\Requests\UpdateContactRequest;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function contact()
    {
        return view('contact');
    }
    public function contactMessageSubmitted(Request $request){
        $rules=[
            'name'=>'required',
            'email'=>'required|email',
            'subject'=>'required',
            'message'=>'required'
        ];
        $messages = [
            'required'=>"Please fill this fild",
            'email.email' => "Wrong formet", 
        ];
        $this->validate($request, $rules, $messages );

        $contact = new  Contact();
        $contact->name = $request->name;
        $contact->email = $request->email;
        $contact->subject = $request->subject;
        $contact->message = $request->message;
        $contact->save();

        return view('contact')->with('message', "Your response has been stored.");
    }
}
