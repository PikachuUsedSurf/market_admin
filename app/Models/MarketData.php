<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MarketData extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'auction_day'
    ];

    public function RawData()
    {
        return $this->hasMany(RawData::class);
    }
}



