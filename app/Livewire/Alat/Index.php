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
        if ($this->showFormPinjam && $this->alatDipilih) {
            // render halaman pinjam
            return view('livewire.alat.pinjam');
        }

        // render halaman utama
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

    public function submitPinjam()
    {
        $this->validate([
            'alat_id' => 'required|exists:alats,id',
            'count'   => 'required|integer|min:1',
        ]);

        $alat = Alat::findOrFail($this->alat_id);

        if ($alat->count >= $this->count) {
            $alat->count -= $this->count;
            $alat->save();

            session()->flash('success', 'Berhasil meminjam alat!');
            $this->reset(['showFormPinjam', 'alatDipilih', 'alat_id', 'count']);
        } else {
            session()->flash('error', 'Stok tidak mencukupi.');
        }
    }

    public function pinjam($alat_id)
    {
        $this->alatDipilih = Alat::findOrFail($alat_id);

        return view('livewire.alat.pinjam', [
            'alatDipilih' => $this->alatDipilih,
        ]);
    }
}
