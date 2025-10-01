<?php

namespace App\Filament\Resources\Eskuls;

use App\Filament\Resources\Eskuls\Pages\CreateEskul;
use App\Filament\Resources\Eskuls\Pages\EditEskul;
use App\Filament\Resources\Eskuls\Pages\ListEskuls;
use App\Filament\Resources\Eskuls\Schemas\EskulForm;
use App\Filament\Resources\Eskuls\Tables\EskulsTable;
use App\Models\Eskul;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class EskulResource extends Resource
{
    protected static ?string $model = Eskul::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $recordTitleAttribute = 'title';

    public static function form(Schema $schema): Schema
    {
        return EskulForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return EskulsTable::configure($table);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListEskuls::route('/'),
            'create' => CreateEskul::route('/create'),
            'edit' => EditEskul::route('/{record}/edit'),
        ];
    }
}
