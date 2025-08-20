<?php

namespace App\Filament\Resources;

use App\Filament\Resources\AlatResource\Pages;
use App\Filament\Resources\AlatResource\RelationManagers;
use App\Models\Alat;
use Doctrine\DBAL\Query\From;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Forms\Components\Section;


class AlatResource extends Resource
{
    protected static ?string $model = Alat::class;

    protected static ?string $navigationIcon = 'heroicon-o-folder';

    protected static ?string $navigationLabel = 'Alat';

    protected static ?string $pluralLabel = 'Alat';

    protected static ?string $slug = 'alat';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('name')
                    ->label('Nama')
                    ->placeholder('Contoh: Laptop'),
                Forms\Components\TextInput::make('count')
                      ->label('Jumlah')
                      ->placeholder('Contoh: 10')
                      ->numeric(),
            ])->columns(1);
    }
    

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('index')
                    ->label('#')
                    ->rowIndex()
                    ->width('10px'),
                Tables\Columns\TextColumn::make('name')->searchable(),
                Tables\Columns\TextColumn::make('count'),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\ActionGroup::make([
                    Tables\Actions\EditAction::make()
                        ->modalWidth('xl'),
                    Tables\Actions\DeleteAction::make(),
                ])
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
            'index' => Pages\ListAlat::route('/'),
            // 'create' => Pages\CreateAlat::route('/create'),
            // 'edit' => Pages\EditAlat::route('/{record}/edit'),
        ];
    }
    

}
