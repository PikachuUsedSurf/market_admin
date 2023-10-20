<?php

namespace App\Http\Controllers;

use App\Models\MarketData;
use App\Models\RawData;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Builder;


class MarketDataController extends Controller
{
    public function market(){

        $raw = RawData::all();
        //dd($raw);
        $market = MarketData::with('RawData');
        dd($market);
        //$market = MarketData;

        return view('home', compact('market'));
    }
}
