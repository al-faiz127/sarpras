<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PeminjamanResource\Pages;
use App\Filament\Resources\PeminjamanResource\RelationManagers;
use App\Models\Peminjaman;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Tables\View\TablesRenderHook;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class PeminjamanResource extends Resource
{
    protected static ?string $model = Peminjaman::class;

    protected static ?string $navigationIcon = 'heroicon-o-folder-open';

    protected static ?string $navigationLabel = 'Peminjaman';

    protected static ?string $pluralLabel = 'Peminjaman';

    protected static ?string $slug = 'peminjaman';

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
                Tables\Columns\TextColumn::make('index')
                    ->label('#')
                    ->rowIndex()
                    ->width('10px'),
                Tables\Columns\TextColumn::make('peminjam_id')->searchable(),
                Tables\Columns\TextColumn::make('ala_idt'),
                Tables\Columns\TextColumn::make('tanggall_pinjam'),
                Tables\Columns\TextColumn::make('tanggal_kembali'),
                Tables\Columns\TextColumn::make('status')
                
            ])
            ->filters([
                //
            ])
            // ->actions([
            //     Tables\Actions\ActionGroup::make([
            //         Tables\Actions\EditAction::make()
            //             ->modalWidth('xl'),
            //         Tables\Actions\DeleteAction::make(),
            //     ])
            // ])
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
            'index' => Pages\ListPeminjamen::route('/'),
            // 'create' => Pages\CreatePeminjaman::route('/create'),
            'edit' => Pages\EditPeminjaman::route('/{record}/edit'),
        ];
    }
}
