<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUlids;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Peminjam extends Model
{
    use HasUlids;
    protected $table = 'peminjam';
    
    protected $fillable = [
        'name',
        'alat_id',
        'major',
        'kelas',
        'nisn',
        'image',
    ];
    
    // Relasi ke model Peminjaman (tabel perantara)
    public function peminjaman(): HasMany
    {
        return $this->hasMany(Peminjaman::class, 'peminjam_id');
    }

    // Relasi langsung ke model Alat melalui tabel peminjaman
    public function alat(): BelongsToMany
    {
        return $this->belongsToMany(Alat::class, 'peminjaman', 'peminjam_id', 'alat_id');
    }
}