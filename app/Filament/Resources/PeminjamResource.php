<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PeminjamResource\Pages;
use App\Filament\Resources\PeminjamResource\RelationManagers;
use App\Models\peminjam;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Tables\View\TablesRenderHook;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Symfony\Component\Console\Helper\TableStyle;

class PeminjamResource extends Resource
{
    protected static ?string $model = Peminjam::class;

    protected static ?string $navigationIcon = 'heroicon-o-folder-open';

    protected static ?string $navigationLabel = 'Peminjam';

    protected static ?string $pluralLabel = 'Peminjam';

    protected static ?string $slug = 'peminjam';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                //
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name')->searchable(),
                Tables\Columns\TextColumn::make('alat_id'),
                Tables\Columns\TextColumn::make('major'),
                Tables\Columns\TextColumn::make('kelas'),
                Tables\Columns\TextColumn::make('nisn'),
                Tables\Columns\TextColumn::make('image'),
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
            'index' => Pages\ListPeminjams::route('/'),
            // 'create' => Pages\CreatePeminjam::route('/create'),
            // 'edit' => Pages\EditPeminjam::route('/{record}/edit'),
        ];
    }
}
