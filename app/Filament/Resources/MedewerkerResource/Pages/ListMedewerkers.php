<?php

namespace App\Filament\Resources\MedewerkerResource\Pages;

use App\Filament\Resources\MedewerkerResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListMedewerkers extends ListRecords
{
    protected static string $resource = MedewerkerResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
