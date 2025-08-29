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

        $borrowedAlatCount = Peminjaman::whereNull('tanggal_kembali')->count();

        $availableAlatCount = $totalUnitAlat - $borrowedAlatCount;

        $barangPopuler = Alat::orderByDesc('count')->take(3)->get();

        return view('alat.index', compact('jumlahJenisAlat', 'availableAlatCount','barangPopuler'));

    }
    public function inventori()
    {
        $inventoryItems = Alat::all();

        return view('alat.inventori', compact('inventoryItems'));
    }
    public function pinjam(Request $request)
    {
        $alat = Alat::all();
        $selectedAlatId = $request->alat_id ?? null;
        return view('alat.pinjam', compact('alat', 'selectedAlatId'));
    }
}
