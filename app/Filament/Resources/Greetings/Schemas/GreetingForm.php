<?php

namespace App\Filament\Resources\Greetings\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class GreetingForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema->schema([
            TextInput::make('name')
                ->required()
                ->label('Nama Kepala Sekolah'),

            TextInput::make('title')
                ->required()
                ->label('Gelar'),

            FileUpload::make('photo')
                ->image()
                ->directory('greetings')
                ->preserveFilenames()
                ->visibility('public')
                ->label('Foto Kepala Sekolah')
                ->required(),



            RichEditor::make('content')
                ->label('Teks Sambutan')
                ->required(),
        ]);
    }
}
