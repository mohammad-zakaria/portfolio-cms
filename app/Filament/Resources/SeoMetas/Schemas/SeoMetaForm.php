<?php

namespace App\Filament\Resources\SeoMetas\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;

class SeoMetaForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('seoable_type')
                    ->required(),
                TextInput::make('seoable_id')
                    ->required()
                    ->numeric(),
                TextInput::make('meta_title'),
                TextInput::make('meta_description'),
                TextInput::make('canonical_url')
                    ->url(),
                FileUpload::make('og_image_path')
                    ->image(),
                TextInput::make('robots')
                    ->required()
                    ->default('index, follow'),
                Textarea::make('schema_json')
                    ->columnSpanFull(),
            ]);
    }
}
