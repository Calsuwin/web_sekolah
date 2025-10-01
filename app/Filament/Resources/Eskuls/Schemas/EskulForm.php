<?php

namespace App\Filament\Resources\Eskuls\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;

class EskulForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                FileUpload::make('image')
                    ->required()->disk('public')
                    ->directory('eskuls'),
                TextInput::make('nama_eskul')
                    ->required(),
                TextInput::make('kode_eskul')
                    ->required(),
                Textarea::make('deskripsi')
                    ->required()
                    ->columnSpanFull(),
                TextInput::make('pembina'),
                TextInput::make('ketua'),
                TextInput::make('jadwal'),
                TextInput::make('jumlah_anggota')
                    ->required()
                    ->numeric()
                    ->default(0),
                TextInput::make('lokasi_latihan'),
            ]);
    }
}
