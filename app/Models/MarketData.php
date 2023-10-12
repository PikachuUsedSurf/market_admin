<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MarketData extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'auction_day'];

    public function rawData()
    {
        return $this->hasMany(RawData::class, 'auction_day', 'auction_day');
    }
}



