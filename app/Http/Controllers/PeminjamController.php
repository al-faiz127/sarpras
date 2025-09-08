<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Peminjam;
use Illuminate\View\View;

class PeminjamController extends Controller
{
    public function peminjam(): View
    {
        $peminjam = Peminjam::all();
        return view('peminjam.peminjam', compact('peminjam'));
    }
}
