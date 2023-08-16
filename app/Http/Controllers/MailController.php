<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Mail;
use App\Mail\SendMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;


class MailController extends Controller
{
    public function sendMail(Request $req)
    {
        $data = [
            "senderEmail" => $req->email,
            'name' => $req->name,
            'phone' => $req->phone,
            'message' => $req->message
        ];

        $recipientEmail = config('mail.username');

        Mail::send('Pages.MailDesign', ['data' => $data], function ($message) use ($data, $recipientEmail) {
            $message->to($recipientEmail);
            $message->subject('Someone contacted you from your website');
            $message->from($data["senderEmail"], $data['name']);
        });

        return redirect()->back()->with(['msg-success' => 'Thanks for contacting we will get back to you soon.']);
    }

    function handleLang(Request $req)
    {
        if ($req->query('lng')) {
            App::setlocale($req->query('lng'));
        }
        return redirect()->back();
    }
}
