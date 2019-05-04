<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Kelas extends Model
{
    protected $fillable = [
        'name'
    ];

    public function siswa(){
        return $this->hasMany('App\Models\Siswa');
    }

    public function pengunguman(){
        return $this->hasMany('App\Models\Pengunguman');
    }
}
