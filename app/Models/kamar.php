<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class kamar extends Model
{
    protected $primaryKey = 'id';
    protected $table = 'kamar';
    protected $fillable = ['nama_kamar', 'jumlah_kamar', 'harga_kamar', 'foto_kamar', 'keterangan'];

    public function fasilitas_kamar() {
       return $this->hasMany(fasilitasKamar::class);
    }

    public function pemesanan() {
       return $this->hasMany(pemesanan::class);
    }
}
