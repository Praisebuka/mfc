<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
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
            dd($req);

            return response()->json(['status' => 200, 'message' => 'Successfully placed an Order for MFC']);
            
        } catch (Throwable $th) {
            return $th->getMessage();
        }
    }
}
