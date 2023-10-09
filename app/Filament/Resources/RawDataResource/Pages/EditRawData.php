<?php

namespace App\Filament\Resources\RawDataResource\Pages;

use App\Filament\Resources\RawDataResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditRawData extends EditRecord
{
    protected static string $resource = RawDataResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
