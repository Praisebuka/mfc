<?php

namespace App\Http\Controllers;

use App\Mail\SendQuickMSG;
use App\Models\SendQuickMessage;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class HomeController extends Controller
{

    public function getUrlEndSideParam() 
    {
        $urlendpoint = last(request()->segments());

        return $urlendpoint;
    }

    public function home()
    {
        return view('home.index')->with(['url' => $this->getUrlEndSideParam()]);;
    }

    public function aboutUs()
    {
        return view('home.about')->with(['url' => $this->getUrlEndSideParam()]);;
    }

    public function contactUs()
    {

        return view('home.contactus')->with(['url' => $this->getUrlEndSideParam()]);
    }
    

    public function submitMessage(Request $req)
    {

        try{ 

            $req->merge([
                'start_date' => Carbon::parse($req->start_date)->format('Y-m-d')
            ]);

            $validatedData = $req->validate([
                'firstname' => 'required|string|max:255',
                'lastname' => 'required|string|max:255',
                'email' => 'required|email|unique:send_quick_messages,email',
                'business_name' => 'required|string|max:255',
                'type_of_staff' => 'required|string|max:255',
                'start_date' => [ 'required', 'date',
                    function ($attribute, $value, $fail) {
                        $date = Carbon::parse($value);
                        if ($date->lt(Carbon::now()->addDays(3))) {
                            $fail('The start date must be at least 3-7 days from today.');
                        }
                    },
                ],
                'message' => 'nullable|string',
            ]);

            $message = SendQuickMessage::create($validatedData);
            Mail::to('info@matrixrecruitment.org')->send(new SendQuickMSG($message));
            // Mail::to('info@matrixrecruitment.org')->cc($message->email)->send(new SendQuickMSG($message));

            return redirect()->back()->with('success', 'Thank you for reaching out to us, your message has been sent and we will be in touch!');
        
        } catch (\Throwable $th) {
            return redirect()->back()->with('resp', [ 'icon' => 'error', 'title' => 'Error', 'text' => $th->getMessage(), ]);
        }

    }

    
    public function faq()
    {

        return view('home.faq')->with(['url' => $this->getUrlEndSideParam()]);
    }
    
    public function termsAndCondition()
    {

        return view('home.terms_and_conditions')->with(['url' => $this->getUrlEndSideParam()]);
    } 

    public function privacyAndPolicy()
    {

        return view('home.privacy_policy')->with(['url' => $this->getUrlEndSideParam()]);
    }

    public function partners()
    {

        return view('home.partners')->with(['url' => $this->getUrlEndSideParam()]);
    }

    public function pricing()
    {
        return view('home.pricing')->with(['url' => $this->getUrlEndSideParam()]);
    }


}
