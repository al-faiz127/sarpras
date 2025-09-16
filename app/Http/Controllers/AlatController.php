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
    public function inventori()
    {
        $inventoryItems = Alat::all();

        return view('alat.inventori', compact('inventoryItems'));
    }
    public function pinjam($id)
    {
        $alat = Alat::findOrFail($id);

        return view('livewire.alat.pinjam', compact('alat'));
    }
    public function submitPinjam(Request $request, $id)
    {
        $alat = Alat::findOrFail($id);

        $request->validate([
            'count' => 'required|integer|min:1',
        ]);

        if ($alat->count >= $request->count) {
            $alat->decrement('count', $request->count);
            return redirect()->route('alat.index')->with('success', 'Berhasil meminjam alat!');
        } else {
            return redirect()->back()->with('error', 'Stok tidak mencukupi.');
        }
    }
}
