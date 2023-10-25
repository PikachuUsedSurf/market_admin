<?php

namespace App\Http\Controllers;

use App\Models\MarketData;
use App\Models\RawData;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Builder;


class MarketDataController extends Controller
{
    public function market(){

        //$raw = RawData::all();
        //dd($raw);
        //$market = MarketData::all();
        $market = MarketData::with('RawData')->get();
        //dd($market);

        return view('home', compact('market'));


    }
}
