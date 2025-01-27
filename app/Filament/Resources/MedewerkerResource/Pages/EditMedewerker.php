<?php

namespace App\Filament\Resources\MedewerkerResource\Pages;

use App\Filament\Resources\MedewerkerResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditMedewerker extends EditRecord
{
    protected static string $resource = MedewerkerResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
