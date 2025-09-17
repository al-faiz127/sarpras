<?php

namespace App\Http\Controllers;

use App\Models\Alat;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class AlatController extends Controller
{
    public function index() : View
    {
        $jumlahJenisAlat = Alat::count();
        $totalUnitAlat = Alat::sum('count');
        $barangPopuler = Alat::orderByDesc('count')->take(3)->get();
        return view('livewire.alat.index', compact('jumlahJenisAlat', 'totalUnitAlat','barangPopuler'));
    }
    
    public function pinjam($id)
    {
        $alat = Alat::findOrFail($id);
        return view('livewire.alat.pinjam', compact('alat'));
    }


    public function submitPinjam(Request $request, $id)
    {
        $validated = $request->validate([
            'count' => 'required|integer|min:1',
        ]);

        $alat = Alat::findOrFail($id);

        if ($alat->count < $validated['count']) {
            return redirect()->back()->with('error', 'Stok tidak mencukupi.');
        }

        return redirect()->route('peminjam.index', [
            'alat_id' => $alat->id,
            'count' => $validated['count'],
        ]);
    }
}