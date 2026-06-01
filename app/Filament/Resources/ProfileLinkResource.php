<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ProfileLinkResource\Pages;
use App\Models\ProfileLink;
use App\Enums\LinkType;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ProfileLinkResource extends Resource
{
    protected static ?string $model = ProfileLink::class;

    protected static ?string $navigationIcon = 'heroicon-o-link';
    
    protected static ?string $navigationGroup = 'Management';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Section::make('Link Details')
                    ->schema([
                        Forms\Components\Select::make('profile_id')
                            ->relationship('profile', 'name')
                            ->searchable()
                            ->required(),
                            
                        Forms\Components\Select::make('type')
                            ->options(LinkType::class)
                            ->default(LinkType::WEBSITE->value)
                            ->required(),
                            
                        Forms\Components\TextInput::make('title')
                            ->required()
                            ->maxLength(255),
                            
                        Forms\Components\TextInput::make('url')
                            ->required()
                            ->url()
                            ->maxLength(255),
                            
                        Forms\Components\TextInput::make('description')
                            ->maxLength(255)
                            ->columnSpanFull(),
                            
                        Forms\Components\TextInput::make('icon')
                            ->maxLength(255)
                            ->helperText('SVG or icon class name'),
                    ])->columns(2),
                    
                Forms\Components\Section::make('Settings')
                    ->schema([
                        Forms\Components\Toggle::make('is_featured')
                            ->default(false),
                            
                        Forms\Components\Toggle::make('is_active')
                            ->default(true),
                            
                        Forms\Components\TextInput::make('sort_order')
                            ->numeric()
                            ->default(0),
                    ])->columns(3),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('profile.name')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('title')
                    ->searchable(),
                Tables\Columns\TextColumn::make('url')
                    ->limit(30)
                    ->searchable(),
                Tables\Columns\TextColumn::make('type')
                    ->badge()
                    ->sortable(),
                Tables\Columns\IconColumn::make('is_featured')
                    ->boolean(),
                Tables\Columns\IconColumn::make('is_active')
                    ->boolean(),
                Tables\Columns\TextColumn::make('sort_order')
                    ->numeric()
                    ->sortable(),
            ])
            ->defaultSort('sort_order')
            ->reorderable('sort_order')
            ->filters([
                Tables\Filters\SelectFilter::make('profile_id')
                    ->relationship('profile', 'name')
                    ->label('Profile'),
                Tables\Filters\TrashedFilter::make(),
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                    Tables\Actions\ForceDeleteBulkAction::make(),
                    Tables\Actions\RestoreBulkAction::make(),
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
            'index' => Pages\ListProfileLinks::route('/'),
            'create' => Pages\CreateProfileLink::route('/create'),
            'edit' => Pages\EditProfileLink::route('/{record}/edit'),
        ];
    }
    
    public static function getEloquentQuery(): Builder
    {
        return parent::getEloquentQuery()
            ->withoutGlobalScopes([
                SoftDeletingScope::class,
            ]);
    }
}
