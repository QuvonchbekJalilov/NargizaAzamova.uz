<?php

namespace App\Filament\Resources;

use App\Filament\Resources\MusicResource\Pages;
use App\Filament\Resources\MusicResource\RelationManagers;
use App\Models\Music;
use Filament\Forms;
use Filament\Forms\Components\Section;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class MusicResource extends Resource
{
    protected static ?string $model = Music::class;

    protected static ?string $navigationIcon = 'heroicon-o-musical-note';

    protected static ?string $navigationLabel = 'Musiqalar';
    protected static ?string $modelLabel = 'Music';



    public static function form(Form $form): Form
    {
        return $form
        ->schema([
            Section::make('Music Information')
            ->schema([
                Forms\Components\Select::make('category_id')
                    ->required()
                    ->relationShip(name: 'category', titleAttribute: 'name_uz')
                    ->columnSpanFull()
                    ->native(false)
                    ->searchable()
                    ->preload(),
                Forms\Components\TextInput::make('title_uz')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('title_en')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('title_ru')
                    ->required()
                    ->maxLength(255),
                Forms\Components\Textarea::make('description_uz')
                    ->required()
                    ->columnSpanFull(),
                Forms\Components\Textarea::make('description_en')
                    ->required()
                    ->columnSpanFull(),
                Forms\Components\Textarea::make('description_ru')
                    ->required()
                    ->columnSpanFull(),
                Forms\Components\FileUpload::make('image')
                    ->image()
                    ->maxSize(10240), // Max file size in kilobytes (10 MB)
                
                Forms\Components\FileUpload::make('music_file')
                    ->label('Upload Music File')
                    ->acceptedFileTypes(['audio/*']) // Accept only audio files
                    ->directory('music') // Directory where files will be stored
                    ->maxSize(10240) // Max file size in kilobytes (10 MB)
                    ->required(),
                
            ])->columns(3),
        ]);
    }
    

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('category.name_uz')
                    ->sortable(),
                Tables\Columns\TextColumn::make('title_uz')
                    ->searchable(),
                Tables\Columns\TextColumn::make('title_en')
                    ->searchable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('title_ru')
                    ->searchable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\ImageColumn::make('image'),
                Tables\Columns\TextColumn::make('music_file')
                    ->searchable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make()
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
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
            'index' => Pages\ListMusic::route('/'),
            'create' => Pages\CreateMusic::route('/create'),
            // 'view' => Pages\ViewMusic::route('/{record}'),
            'edit' => Pages\EditMusic::route('/{record}/edit'),
        ];
    }
}
