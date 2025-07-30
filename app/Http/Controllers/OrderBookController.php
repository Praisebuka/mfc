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
}
