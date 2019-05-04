<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Siswa extends Authenticatable
{
    protected $fillable = [
        'NIS', 'name', 'alamat', 'no_telp', 'pin',
    ];

    protected $hidden = [
        'pin',
    ];

    public function kelas(){
        return $this->belongsTo('App\Kelas');
    }
}
