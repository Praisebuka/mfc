<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Throwable;

class OrderBookController extends Controller
{
    public function globalOrdering()
    {
        try {
            return "I am here";
            
        } catch (Throwable $th) {
            return $th->getMessage();
        }
    }
}
