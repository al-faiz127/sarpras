<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUlids;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Alat extends Model
{
    use HasUlids;
    protected $table = 'alat';

    protected $fillable = [
        'foto',
        'name',
        'count',
    ];
    
    // Relasi ke model Peminjaman (tabel perantara)
    public function peminjaman(): HasMany
    {
        return $this->hasMany(Peminjaman::class, 'alat_id');
    }

    // Relasi langsung ke model Peminjam melalui tabel peminjaman
    public function peminjam(): BelongsToMany
    {
        return $this->belongsToMany(Peminjam::class, 'peminjaman', 'alat_id', 'peminjam_id');
    }
}