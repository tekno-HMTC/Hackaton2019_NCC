<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Kelas extends Model
{
    protected $fillable = [
        'name'
    ];

    public function siswas(){
        return $this->hasMany('App\Models\Siswa');
    }

    public function pengumuman(){
        return $this->hasMany('App\Models\Pengunguman');
    }
}
