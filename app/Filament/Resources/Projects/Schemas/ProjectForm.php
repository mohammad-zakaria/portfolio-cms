<?php

namespace App\Filament\Resources\Projects\Schemas;

use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;

class ProjectForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Select::make('venture_id')
                    ->relationship('venture', 'name'),
                TextInput::make('title')
                    ->required(),
                TextInput::make('slug')
                    ->required(),
                TextInput::make('category')
                    ->required(),
                TextInput::make('client_name'),
                Textarea::make('summary')
                    ->required()
                    ->columnSpanFull(),
                Textarea::make('challenge')
                    ->columnSpanFull(),
                Textarea::make('solution')
                    ->columnSpanFull(),
                Textarea::make('results')
                    ->columnSpanFull(),
                Textarea::make('tech_stack')
                    ->columnSpanFull(),
                TextInput::make('thumbnail_path'),
                Textarea::make('gallery')
                    ->columnSpanFull(),
                TextInput::make('live_url')
                    ->url(),
                TextInput::make('repo_url')
                    ->url(),
                DatePicker::make('completed_at'),
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
