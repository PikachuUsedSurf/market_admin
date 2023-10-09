<?php

namespace App\Filament\Resources\MarketDataResource\Pages;

use App\Filament\Resources\MarketDataResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListMarketData extends ListRecords
{
    protected static string $resource = MarketDataResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
