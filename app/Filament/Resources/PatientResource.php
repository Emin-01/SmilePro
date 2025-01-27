<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PatientResource\Pages;
use App\Models\Patient;
use Filament\Forms;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Components\Select;
use Filament\Resources\Resource;
use Filament\Tables;

class PatientResource extends Resource
{
    protected static ?string $model = Patient::class;

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
                Textarea::make('medisch_dossier')
                    ->label('Medisch Dossier')
                    ->nullable(),
                Toggle::make('isactief')
                    ->label('Is Actief')
                    ->default(true),
                Textarea::make('opmerking')
                    ->label('Opmerking')
                    ->nullable(),
            ]);
    }

    public static function table(Tables\Table $table): Tables\Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('persoon.voornaam')->label('Persoon'),
                Tables\Columns\TextColumn::make('nummer')->searchable(),
                Tables\Columns\TextColumn::make('medisch_dossier')->label('Medisch Dossier'),
                Tables\Columns\BooleanColumn::make('isactief')->label('Is Actief'),
                Tables\Columns\TextColumn::make('opmerking')->label('Opmerking'),
                Tables\Columns\TextColumn::make('created_at')->label('Datumaangemaakt'),
                Tables\Columns\TextColumn::make('updated_at')->label('Datumgewijzigd'),
            ]);
    }

    public static function getRelations(): array
    {
        return [];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListPatients::route('/'),
            'create' => Pages\CreatePatient::route('/create'),
            'edit' => Pages\EditPatient::route('/{record}/edit'),
        ];
    }
}