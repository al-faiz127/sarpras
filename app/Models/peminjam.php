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
        'major',
        'kelas',
        'nisn',
        'image',
    ];
    
    public function peminjaman(): HasMany
    {
        return $this->hasMany(Peminjaman::class, 'peminjam_id', 'id');
    }
}