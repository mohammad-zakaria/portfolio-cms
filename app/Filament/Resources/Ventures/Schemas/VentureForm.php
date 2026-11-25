<?php

namespace App\Filament\Resources\Ventures\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;

class VentureForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')
                    ->required(),
                TextInput::make('slug')
                    ->required(),
                TextInput::make('role')
                    ->required(),
                TextInput::make('category')
                    ->required(),
                TextInput::make('tagline'),
                Textarea::make('summary')
                    ->required()
                    ->columnSpanFull(),
                Textarea::make('description')
                    ->columnSpanFull(),
                Textarea::make('highlights')
                    ->columnSpanFull(),
                TextInput::make('logo_path'),
                FileUpload::make('cover_image_path')
                    ->image(),
                TextInput::make('website_url')
                    ->url(),
                TextInput::make('founded_year')
                    ->numeric(),
                Toggle::make('is_featured')
                    ->required(),
                Toggle::make('is_published')
                    ->required(),
                TextInput::make('sort_order')
                    ->required()
                    ->numeric()
                    ->default(0),
            ]);
    }
}
