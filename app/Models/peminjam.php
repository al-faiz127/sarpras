<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUlids;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Peminjam extends Model
{
    use HasUlids;
    protected $table ='peminjam';
    
    protected $fillable = [
        'name',
        'alat_id',
        'major',
        'kelas',
        'nisn',
        'iamge',
    ];
    public function alat():HasMany{
        return $this->hasMany(Alat::class);
    
    }
}
