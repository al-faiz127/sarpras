<?php

namespace App\Livewire\Peminjam;

use App\Models\Peminjam;
use Livewire\Component;
use Livewire\WithFileUploads; 

class Create extends Component
{
    use WithFileUploads;

    public $nisn;
    public $nama;   
    public $jurusan;
    public $kelas;
    public $gambar;

    protected $rules = [
        'nisn'    => 'required|numeric|unique:peminjam,nisn',
        'nama'    => 'required|string|max:255',
        'jurusan' => 'required|integer',
        'kelas'   => 'required|string|max:255',
        'gambar'  => 'required|image',  
    ];

    public function save()
    {
        $this->validate();

        $pathGambar = $this->gambar->store('kartu-pelajar', 'public');

        Peminjam::create([
            'nisn'    => $this->nisn,
            'nama'    => $this->nama,
            'jurusan' => $this->jurusan,
            'kelas'   => $this->kelas,
            'gambar'  => $pathGambar,
        ]);

        session()->flash('success', 'Data peminjam berhasil ditambahkan.');

        $this->reset();
    }

    public function render()
    {
        return view('livewire.peminjam.create');
    }
}
