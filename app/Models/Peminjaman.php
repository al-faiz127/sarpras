<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUlids;
use Illuminate\Database\Eloquent\Model;

class Peminjaman extends Model
{
    use HasUlids;
    protected $table = 'peminjaman';

    protected $fillable = [
        'peminjam_id',
        'alat_id',
        'tanggal_pinjam',
        'tanggal_kembali',
        'status',
    ];
}
