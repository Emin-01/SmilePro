<?php

namespace App\Filament\Resources;

use App\Filament\Resources\MedewerkerResource\Pages;
use App\Models\Medewerker;
use Filament\Forms;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Toggle;
use Filament\Resources\Resource;
use Filament\Tables;

class MedewerkerResource extends Resource
{
    protected static ?string $model = Medewerker::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Forms\Form $form): Forms\Form
    {
        return $form
            ->schema([
                Select::make('persoon_id')
                    ->label('Persoon')
                    ->relationship('persoon', 'voornaam')
                    ->required(),
                TextInput::make('nummer')
                    ->required()
                    ->unique(),
                Select::make('medewerkertype')
                    ->options([
                        'Assistent' => 'Assistent',
                        'Mondhygiënist' => 'Mondhygiënist',
                        'Tandarts' => 'Tandarts',
                        'Praktijkmanagement' => 'Praktijkmanagement',
                    ])
                    ->required(),
                TextInput::make('specialisatie')
                    ->nullable(),
                Textarea::make('beschikbaarheid')
                    ->nullable(),
                Toggle::make('isactief')
                    ->default(true),
                Textarea::make('opmerking')
                    ->nullable(),
            ]);
    }

    public static function table(Tables\Table $table): Tables\Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('persoon.voornaam')->label('Persoon'),
                Tables\Columns\TextColumn::make('nummer')->searchable(),
                Tables\Columns\TextColumn::make('medewerkertype'),
                Tables\Columns\BooleanColumn::make('isactief'),
            ]);
    }

    public static function getRelations(): array
    {
        return [];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListMedewerkers::route('/'),
            'create' => Pages\CreateMedewerker::route('/create'),
            'edit' => Pages\EditMedewerker::route('/{record}/edit'),
        ];
    }
}