<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;

class MailSendController extends Controller
{
    public function create()
    {
        return view('powerhouse');
    }
    public function mailsend(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'message' => 'required'
        ]);
        $data['content'] = $request->message;
        $data['phone'] = $request->phone;
        $data['name'] = $request->name;
        $data['email'] = $request->email;

        Mail::send('emails.contact-message', $data, function ($message) use ($request) {
            $message->from($request->email, $request->name)
                ->subject('PowerHouse Website');
            $message->sender($request->email, $request->name);

            $message->to('powerhousefitness.info@gmail.com', 'PowerHouse ');
        });

        return redirect()->back()->with('success', true)->with('conactmsg', 'Uspešno ste poslali prijavu! ');
    }
}
