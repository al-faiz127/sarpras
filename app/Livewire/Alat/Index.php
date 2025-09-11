<?php

namespace App\Livewire\Alat;

use Livewire\Component;
use App\Models\Alat;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;

    public function render()
    {
        $jumlahJenisAlat = Alat::count();

        $totalUnitAlat = Alat::sum('count');

        $barangPopuler = Alat::orderByDesc('count')->take(3)->get();

        return view('livewire.alat.index', compact('jumlahJenisAlat', 'totalUnitAlat','barangPopuler'));
    }
}
