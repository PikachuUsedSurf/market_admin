<?php

namespace App\Filament\Resources\RawDataResource\Pages;

use App\Filament\Resources\RawDataResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListRawData extends ListRecords
{
    protected static string $resource = RawDataResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
