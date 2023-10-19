<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

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

    public function MarketData(): BelongsTo
    {
        return $this->belongsTo(MarketData::class);
    }
}
