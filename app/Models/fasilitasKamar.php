<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class fasilitasKamar extends Model
{
    protected $primaryKey = 'id';
    protected $table = 'fasilitas_kamar';
    protected $fillable = [
        'kamar_id',
        'nama_fasilitas_kamar',
        'nama_kasur',
        'kapasitas_ruangan',
        'ukuran_ruangan'];

    public function kamar() {
        return $this->belongsTo(kamar::class);
    }
}
