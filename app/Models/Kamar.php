<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kamar extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama_kamar',
        'tipe_kamar',
        'bed',
        'kapasitas',
        'quantity',
        'deskripsi',
    ];

    public function reservasi()
    {
        return $this->hasMany(Reservasi::class, 'kamar_id');
    }

}
