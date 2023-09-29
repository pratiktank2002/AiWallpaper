<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ProductsResource\Pages;
use App\Filament\Resources\ProductsResource\RelationManagers;
use App\Models\Products;
use Filament\Forms;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Group;
use Filament\Forms\Components\MarkdownEditor;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ProductsResource extends Resource
{
    protected static ?string $model = Products::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                //
                Group::make()
                    ->schema([
                        Section::make()
                            ->description('This is section 1')
                            ->schema([
                                TextInput::make('name')
                                    ->placeholder('wapppaper name')
                                    ->required(),
                                Select::make('category')
                                    ->label('category Type')
                                    ->relationship('product_type', 'name')
                                    ->required(),
                                MarkdownEditor::make('description')
                                    ->placeholder('add image description')
                                    ->required(),
                            ]),
                    ]),
                Group::make()
                    ->schema([
                        Section::make()
                            ->description('this is section 2')
                            ->schema([
                                FileUpload::make('image_url')
                                    ->image()
                                    ->preserveFilenames()
                                    ->imageEditor()
                                    ->required(),
                                TextInput::make('resolution')
                                    ->placeholder('Enter image resolution')
                                    ->required(),
                                TextInput::make('file_type')
                                    ->placeholder('image file type')
                                    ->required(),
                                Select::make('status')
                                    ->options([
                                        '0' => 'Not Featured',
                                        '1' => 'Featured',
                                        '3' => 'deleted',
                                    ])
                                    ->required(),
                            ]),
                    ])
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                //
                TextColumn::make('id')
                ->searchable()
                ->sortable(),
                TextColumn::make('name')
                    ->sortable(),
                ImageColumn::make('image_url'),
                TextColumn::make('category'),
                TextColumn::make('resolution'),
                TextColumn::make('file_type')
                    ->searchable(),
                TextColumn::make('status')
                    ->sortable()
                    ->searchable(),
            ])
            ->filters([
                //
            ])
            ->actions([
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
            'index' => Pages\ListProducts::route('/'),
            'create' => Pages\CreateProducts::route('/create'),
            'edit' => Pages\EditProducts::route('/{record}/edit'),
        ];
    }
}
