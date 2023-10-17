<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Model;

class MarketData extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'auction_day'
    ];

    public function RawData(): hasMany
    {
        return $this->hasMany(RawData::class);
        //return $this->hasMany(RawData::class, 'auction_day', 'auction_day');
    }
}



