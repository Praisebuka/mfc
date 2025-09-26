<?php

namespace App\Http\Controllers;

use App\Mail\CountDownNewsletter as MailCountDownNewsletter;
use App\Mail\InviteSpeaker;
use App\Mail\Newsletter as MailNewsletter;
use App\Models\CountDownNewsletter;
use App\Models\InviteToSpeak;
use App\Models\Newsletter;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Throwable;

class NewsletterController extends Controller
{
    public function subscribe(Request $req)
    {
        try {

            $validatedData = $req->validate([
                'firstname' => 'required|string|max:255',
                'email' => 'required|email|unique:newsletters,email',
            ]);

            $message = Newsletter::create($validatedData);
            Mail::to($req->email)->send(new MailNewsletter($message));
            
            return response()->json(['status' => 201, 'message' => 'Thank you '. $req->firstname .', You have successfully subscribed to our newsletter.']);
            
        } catch (Throwable $th) {
            return response()->json(['status' => 500, 'message' => $th->getMessage()]);
        }
        
    }

    public function inviteToSpeak(Request $req)
    {
        try {

            $validatedData = $req->validate([
                'firstname' => 'required|string|max:255',
                'email' => 'required|email',
                'event_name' => 'required|string',
                'event_details' => 'required|string',
            ]);

            $message = InviteToSpeak::create($validatedData);
            Mail::to($req->email)->send(new InviteSpeaker($message));
            
            return response()->json(['status' => 201, 'message' => 'Thank you for your interest in having us speak at '. $req->event_name ]);
            
        } catch (Throwable $th) {
            return response()->json(['status' => 500, 'message' => $th->getMessage()]);
        }
        
    }

    public function subscribeTimer(Request $req)
    {
        try {

            $validatedData = $req->validate([
                'name' => 'nullable|string|max:255',
                'email' => 'required|email|unique:count_down_newsletters,email',
            ]);

            $message = CountDownNewsletter::create($validatedData);
            Mail::to($req->email)->send(new MailCountDownNewsletter($message));
            
            return response()->json(['status' => 201, 'message' => 'Thank you '. $req->name ? : 'there' .', You have successfully subscribed to our newsletter and you will be notified.']);
            
        } catch (Throwable $th) {
            return response()->json(['status' => 500, 'message' => $th->getMessage()]);
        }
        
    }

}
