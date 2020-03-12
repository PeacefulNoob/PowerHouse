<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use Mail;
class MailSendController extends Controller
{
    public function create(){
        return view('powerhouse');
    }
    public function mailsend(Request $request)
    {
        $this->validate($request,[
            'name'=>'required',
            'email'=>'required|email',
            'phone'=>'required',
            'message'=>'required'
        ]);
        $data['content'] = $request->message;
        
        Mail::send('emails.contact-message', $data, function($message) use($request) {
 
        $message->to('nordmne.info@gmail.com', 'Receiver Name')
            ->from( $request->email , $request->name )
                    ->subject('PowerHouse Website');
        });
 
        return redirect()->back()->with('conactmsg', 'Uspesno ste poslali poruku! ');

    }
}