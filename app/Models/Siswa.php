<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    protected $fillable = [
        'NIS','name','alamat','no_telp','pin'
    ];

    public function kelas(){
        return $this->belongsTo('App\Kelas');
    }
}
