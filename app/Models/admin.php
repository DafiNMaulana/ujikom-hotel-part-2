<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class admin extends Authenticatable
{
    protected $primaryKey = 'id';
    protected $table = 'admin';
    protected $fillable = ['username', 'password', 'nama', 'level'];
}
