<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dosen extends Model
{
    use HasFactory;

    protected $table = 'dosen';

    protected $fillable = [
        'nip',
        'nama',
        'kode_prodi'
    ];

    public function prodi(){
        return $this->belongsTo(Prodi::class, 'kode_prodi', 'id');
    }
}
