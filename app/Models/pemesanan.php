<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class pemesanan extends Model
{
    protected $primaryKey = 'id';
    protected $table = 'pemesanan';
    protected $fillable = [
        'kamar_id',
        'tanggal_checkin',
        'tanggal_checkout',
        'jumlah_kamar_dipesan',
        'nama_pemesan',
        'email_pemesan',
        'no_hp',
        'nama_tamu',
        'status_pemesanan',
        'tanggal_pesan'];

        public function kamar() {
            return $this->belongsTo(kamar::class, 'kamar_id', 'id');
        }
}
