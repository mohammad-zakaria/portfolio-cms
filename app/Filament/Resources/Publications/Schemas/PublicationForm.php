<?php

namespace App\Filament\Resources\Publications\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;

class PublicationForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('title')
                    ->required(),
                TextInput::make('slug')
                    ->required(),
                Textarea::make('authors')
                    ->required()
                    ->columnSpanFull(),
                TextInput::make('venue')
                    ->required(),
                TextInput::make('published_year')
                    ->required()
                    ->numeric(),
                Textarea::make('abstract')
                    ->required()
                    ->columnSpanFull(),
                TextInput::make('doi'),
                TextInput::make('external_url')
                    ->url(),
                TextInput::make('pdf_path'),
                Textarea::make('citation_bibtex')
                    ->columnSpanFull(),
                Toggle::make('is_published')
                    ->required(),
                TextInput::make('sort_order')
                    ->required()
                    ->numeric()
                    ->default(0),
            ]);
    }
}
