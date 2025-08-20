<?php

namespace App\Filament\Resources\AlatResource\Pages;

use App\Filament\Resources\AlatResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListAlat extends ListRecords
{
    protected static string $resource = AlatResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make()
                ->label('Tambah Alat')
                ->icon('heroicon-o-plus')
                ->modalWidth('xl')
                ->modalHeading('Tamnbah Alat'),
        ];
    }
}
