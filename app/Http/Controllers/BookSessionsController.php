<?php

namespace App\Http\Controllers;

use App\Mail\BookFreeSession as MailBookFreeSession;
use App\Models\BookFreeSession;
use App\Models\BookPaidSession;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Throwable;

class BookSessionsController extends Controller
{

    public function bookFreeSession(Request $req)
    {
        try {

            # Validate data entries from FE
            $validatedData = $req->validate([
                'name' => 'required|string|max:255',
                'email' => 'required|email',
                'country' => 'required|string|max:255',
            ]);

            # Save data and send mail confirmation
            $data = BookFreeSession::create($validatedData);
            Mail::to($req->email)->send(new MailBookFreeSession($data));
            
            return response()->json(['status' => 201, 'message' => 'You have been successfully booked for next weekly free MFC session', 'data' => $data]);
            
        } catch (Throwable $th) {
            return $th->getMessage();
        }
    }
    

    public function bookPaidSession(Request $req)
    {
        try {

            # Validate data entries from FE
            $validatedData = $req->validate([
                'name' => 'required|string|max:255',
                'email' => 'required|email',
                'country' => 'required|string|max:255',
                'reference' => 'required|string|max:255',
            ]);

            # Save data and send mail confirmation
            $data = BookPaidSession::create($validatedData);
            
            return response()->json(['status' => 201, 'message' => 'You have been successfully booked for a paid MFC session with Dr Ovo', 'data' => $data]);
            
        } catch (Throwable $th) {
            return $th->getMessage();
        }
    }
    

}
