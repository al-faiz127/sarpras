<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUlids;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

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
    
    // Relasi ke model Peminjam
    public function peminjam(): BelongsTo
    {
        return $this->belongsTo(Peminjam::class, 'peminjam_id');
    }
    
    // Relasi ke model Alat
    public function alat(): BelongsTo
    {
        return $this->belongsTo(Alat::class, 'alat_id');
    }
}