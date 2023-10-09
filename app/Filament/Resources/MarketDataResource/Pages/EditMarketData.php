<?php

namespace App\Filament\Resources\MarketDataResource\Pages;

use App\Filament\Resources\MarketDataResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditMarketData extends EditRecord
{
    protected static string $resource = MarketDataResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
