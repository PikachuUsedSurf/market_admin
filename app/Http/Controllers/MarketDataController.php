<?php

namespace App\Http\Controllers;
use App\Models\MarketData;

use Illuminate\Http\Request;

class MarketDataController extends Controller
{
    public function market(){
        $market = MarketData::all();
        return view('home', ['market' => $market]);

    }
}
