<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUlids;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Alat extends Model
{
    use HasUlids;
    protected $table = 'alat';

    protected $fillable = [
        'name',
        'count',
    ];
    public function peminjaman():HasMany {
        return $this -> hasMany(peminjaman::class);
    }



}
