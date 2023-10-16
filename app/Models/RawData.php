<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RawData extends Model
{
    use HasFactory;

    protected $fillable = [
            'market_data_id',
            'name',
            'type',
            'kg',
            'region',
            'auction_day'
        ];
}
