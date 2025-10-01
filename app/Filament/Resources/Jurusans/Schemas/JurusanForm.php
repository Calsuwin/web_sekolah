<?php

namespace App\Filament\Resources\Jurusans\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class JurusanForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                FileUpload::make('image')
                    ->required()->disk('public')
                    ->directory('jurusans'),
                TextInput::make('nama_jurusan')
                    ->required(),
                TextInput::make('kode_jurusan')
                    ->required(),
                TextInput::make('deskripsi')
                    ->required(),
                TextInput::make('kaprog'),
                TextInput::make('akreditasi'),
                TextInput::make('jumlah_siswa')
                    ->required()
                    ->numeric()
                    ->default(0),
            ]);
    }
}
