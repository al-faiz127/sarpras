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

    public function inventori()
    {
        $inventoryItems = Alat::all();

        return view('livewire.alat.inventori', compact('inventoryItems'));
    }
    public function pinjam(Request $request)
    {
        if ($request->isMethod('post')) {

            $request->validate([
                'alat_id' => 'required|exists:alat,id',
                'count' => 'required|integer',
            ]);

        
            $alat = Alat::findOrFail($request->alat_id);

            if ($alat->count >= $request->count) {
                $alat->count -= $request->count;
                $alat->save();

                return redirect()->route('peminjam.peminjam');
            } 
        }
    
        $alat = Alat::all();
        $selectedAlatId = $request->alat_id ?? null;
        return view('alat.pinjam', compact('alat', 'selectedAlatId'));
    }
}
