<?php

namespace App\Filament\Resources\Eskuls\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class EskulsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                ImageColumn::make('image')
                    ->disk('public')
                    ->square()
                    ->label('Image'),
                TextColumn::make('nama_eskul')
                    ->searchable(),
                TextColumn::make('kode_eskul')
                    ->searchable(),
                TextColumn::make('pembina')
                    ->searchable(),
                TextColumn::make('ketua')
                    ->searchable(),
                TextColumn::make('jadwal')
                    ->searchable(),
                TextColumn::make('jumlah_anggota')
                    ->numeric()
                    ->sortable(),
                TextColumn::make('lokasi_latihan')
                    ->searchable(),
                TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->recordActions([
                EditAction::make(),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }
}
