<?php

namespace App\Http\Controllers;

use App\Mail\OrderPresale;
use App\Models\OrderPresaleForLocal;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Throwable;

class OrderBookController extends Controller
{
    public function globalOrdering()
    {
        try {
            return redirect('https://amazon.com');
            
        } catch (Throwable $th) {
            return $th->getMessage();
        }
        
    }
    
    public function localOrdering(Request $req)
    {
        try {

            $validatedData = $req->validate([
                'no_of_copies' => 'required|integer',
                'firstname' => 'required|string|max:255',
                'email' => 'required|email|unique:order_presale_for_locals,email',
                'phone' => 'required|string|max:255',
                'city' => 'required|string|max:255',
            ]);

            $message = OrderPresaleForLocal::create($validatedData);
            Mail::to($req->email)->send(new OrderPresale($message));
            
            return response()->json(['status' => 200, 'message' => 'Successfully placed an Order for MFC Presale']);
            
        } catch (Throwable $th) {
            return $th->getMessage();
        }
    }


}
