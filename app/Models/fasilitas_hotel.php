<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class fasilitas_hotel extends Model
{
    protected $primaryKey = 'id';
    protected $table = 'fasilitas_hotel';
    protected $fillable = ['nama_fasilitas_hotel', 'foto_fasilitas_hotel', 'deskripsi_fasilitas_hotel'];
}
