<?php

namespace App\Http\Controllers;

use App\Models\Alat;

use Illuminate\View\View;

use App\Models\Peminjaman;

use Illuminate\Http\RedirectResponse;

use Illuminate\Http\Request;

class AlatController extends Controller
{
    public function index() : View
    {
        $jumlahJenisAlat = Alat::count();

        $totalUnitAlat = Alat::sum('count');

        $barangPopuler = Alat::orderByDesc('count')->take(3)->get();

        return view('alat.index', compact('jumlahJenisAlat', 'totalUnitAlat','barangPopuler'));

    }
    public function inventori()
    {
        $inventoryItems = Alat::all();

        return view('alat.inventori', compact('inventoryItems'));
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

                return redirect()->route('alat.index');
            } 
        }
    
        $alat = Alat::all();
        $selectedAlatId = $request->alat_id ?? null;
        return view('alat.pinjam', compact('alat', 'selectedAlatId'));
    }

}


