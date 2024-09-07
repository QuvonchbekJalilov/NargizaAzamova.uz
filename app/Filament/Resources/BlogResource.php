<?php

namespace App\Filament\Resources;

use App\Filament\Resources\BlogResource\Pages;
use App\Filament\Resources\BlogResource\RelationManagers;
use App\Models\Blog;
use Filament\Forms;
use Filament\Forms\Components\Section;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class BlogResource extends Resource
{
    protected static ?string $model = Blog::class;

    protected static ?string $navigationIcon = 'heroicon-o-newspaper';

    protected static ?string $navigationLabel = 'Yangiliklar';

    protected static ?string $modelLabel = 'News';


    public static function form(Form $form): Form
{
    return $form
        ->schema([
            Section::make('Blog Information')
                ->schema([
                    Forms\Components\TextInput::make('title_uz')
                        ->required()
                        ->label("Mavzu Nomi O'zbek tilida")

                        ->maxLength(255),
                    Forms\Components\TextInput::make('title_en')
                        ->required()
                        ->label("Mavzu Nomi Ingliz tilida")
                        ->maxLength(255),
                    Forms\Components\TextInput::make('title_ru')
                        ->required()
                        ->label("Mavzu Nomi Rus tilida")
                        ->maxLength(255),
                    Forms\Components\Textarea::make('description_uz')
                        ->required()
                        ->label("Tavsif O'zbek tilida")
                        ->columnSpanFull(),
                    Forms\Components\Textarea::make('description_en')
                        ->required()
                        ->label("Tavsif Ingliz tilida")
                        ->columnSpanFull(),
                    Forms\Components\Textarea::make('description_ru')
                        ->required()
                        ->label("Tavsif Rus tilida")
                        ->columnSpanFull(),
                    Forms\Components\FileUpload::make('image')
                        ->image()
                        ->columnSpanFull(),
                ])
                ->columns(3), // Correct placement of columns method
        ]);
}


    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('title_uz')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('title_en')
                    ->searchable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('title_ru')
                    ->searchable()
                    ->toggleable(isToggledHiddenByDefault: true),
                    
                Tables\Columns\ImageColumn::make('image'),
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
            'index' => Pages\ListBlogs::route('/'),
            'create' => Pages\CreateBlog::route('/create'),
            // 'view' => Pages\ViewBlog::route('/{record}'),
            // 'edit' => Pages\EditBlog::route('/{record}/edit'),
        ];
    }
}
