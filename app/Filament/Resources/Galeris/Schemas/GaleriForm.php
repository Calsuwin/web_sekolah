<?php

namespace App\Filament\Resources\Galeris\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class GaleriForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                FileUpload::make('image')
                ->required()->disk('public')
                ->directory('galeri'),
                TextInput::make('nama_galeri')
                    ->required(),
                TextInput::make('kode_galeri')
                    ->required(),
                TextInput::make('deskripsi')
                    ->required(),
            ]);
    }
}
