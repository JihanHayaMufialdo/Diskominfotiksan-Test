<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    use HasFactory;

    protected $table = 'mahasiswa';

    protected $fillable = [
        'nim',
        'nama',
        'alamat',
        'kode_prodi'
    ];

    public function prodi(){
        return $this->belongsTo(Prodi::class, 'kode_prodi', 'id');
    }
}
