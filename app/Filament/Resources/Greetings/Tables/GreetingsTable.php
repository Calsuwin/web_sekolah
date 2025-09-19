<?php

namespace App\Filament\Resources\Greetings\Tables;

use Filament\Tables;
use Filament\Tables\Table;

class GreetingsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\ImageColumn::make('photo')
                    ->disk('public')
                    ->square()
                    ->label('Image'),

                Tables\Columns\TextColumn::make('name')
                    ->label('Nama')
                    ->searchable(),

                Tables\Columns\TextColumn::make('title')
                    ->label('Gelar'),

                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->label('Dibuat'),
            ]);
    }
}
