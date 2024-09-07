<?php

namespace App\Filament\Resources\MusicResource\Pages;

use App\Filament\Resources\MusicResource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewMusic extends ViewRecord
{
    protected static string $resource = MusicResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}
