<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Peminjam;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;

class PeminjamController extends Controller
{
    public function peminjam(): View
    {


        return view('peminjam.peminjam');


        
    }


    public function store(Request $request): RedirectResponse
    {
        //validate form
        $request->validate([
            'nama'      => 'required|string|min:3',
            'nisn'      => 'required|string',
            'jurusan'   => 'required|string',
            'kelas'     => 'required|string',
            'gambar'    => 'required|image|mimes:jpeg,jpg,png|max:2048'
        ]);


        $image = $request->file('gambar');
        $imageName = $image->hashName();
        $image->storeAs('peminjam', $imageName);

        Peminjam::create([
            'name'      => $request->nama,
            'nisn'      => $request->nisn,
            'major'     => $request->jurusan,
            'kelas'     => $request->kelas,
            'image'     => $imageName
        ]);

        return redirect()->route('peminjam.peminjam');
    }
}

