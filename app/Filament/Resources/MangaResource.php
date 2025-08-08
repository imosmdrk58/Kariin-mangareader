<?php

namespace App\Filament\Resources;

use App\Filament\Resources\MangaResource\Pages;
use App\Filament\Resources\MangaResource\RelationManagers;
use App\Models\Manga;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Textarea;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ImageColumn;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class MangaResource extends Resource
{
    protected static ?string $model = Manga::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('title')->required(),
                FileUpload::make('cover')
                    ->image()
                    ->directory('covers')
                    ->required(),
                Textarea::make('description'),
                TextInput::make('author'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                ImageColumn::make('cover'),
                TextColumn::make('title')->searchable(),
                TextColumn::make('author'),
                TextColumn::make('created_at')->date(),
            ])
            ->filters([
                //
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListMangas::route('/'),
            'create' => Pages\CreateManga::route('/create'),
            'edit' => Pages\EditManga::route('/{record}/edit'),
        ];
    }
}
