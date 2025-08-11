<?php

namespace App\Http\Controllers;

use App\Mail\DonateCopy;
use App\Mail\OrderPresale;
use App\Models\DonateCopies;
use App\Models\OrderPresaleForLocal;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Throwable;

class OrderBookController extends Controller
{
    public function globalOrdering()
    {
        try {
            return response()->json(['status' => 200, 'message' => 'Thank you for your purchase, kindly complete your order @amazon.com']);
            
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
                'reference' => 'required|string',
            ]);

            # Get total amount of book ordered
            $validatedData['amount'] = $req->no_of_copies * 20000;

            $message = OrderPresaleForLocal::create($validatedData);
            Mail::to($req->email)->send(new OrderPresale($message));
            
            return response()->json(['status' => 201, 'message' => 'Successfully placed an Order for MFC Presale']);
            
        } catch (Throwable $th) {
            return $th->getMessage();
        }
    }
    
    
    public function donateCopies(Request $req)
    {
        try {

            $validatedData = $req->validate([
                'no_of_copies' => 'required|integer|min:5',
                'firstname' => 'required|string|max:255',
                'email' => 'required|email',
                'org_name' => 'nullable|string|max:255',
                'country' => 'required|string|max:255',
                'reference' => 'required|string',
            ]);

            # Get total amount of book ordered
            $validatedData['amount'] = $req->no_of_copies * 20000;

            $message = DonateCopies::create($validatedData);
            Mail::to($req->email)->send(new DonateCopy($message));
            
            return response()->json(['status' => 201, 'message' => 'Successfully placed an Order to donate MFC Books']);
            
        } catch (Throwable $th) {
            return $th->getMessage();
        }
    }

}
