<?php

namespace App\Livewire\Alat;

use Livewire\Component;
use App\Models\Alat;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;

    public $showFormPinjam = false;
    public $alatDipilih;
    public $alat_id;
    public $count;

    public function render()
{
    $jumlahJenisAlat = Alat::count();
    $totalUnitAlat   = Alat::sum('count');
    $barangPopuler   = Alat::orderByDesc('count')->take(3)->get();

    return view('livewire.alat.index', compact('jumlahJenisAlat', 'totalUnitAlat', 'barangPopuler'));
}


    public function bukaFormPinjam($id)
    {
        $this->alatDipilih = Alat::findOrFail($id);
        $this->alat_id     = $this->alatDipilih->id;
        $this->count       = 1;
        $this->showFormPinjam = true;
    }
    
    public function inventori()
    {
        $inventoryItems = Alat::all();

        return view('livewire.alat.inventori', compact('inventoryItems'));
    }
    
}
