<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pengunguman extends Model
{
    protected $fillable = [
        'name', 'konten', 'tgltampil', 'tglselesai', 'kelas_id',
    ];

    public function kelas(){
        return $this->belongsTo('App\Models\Kelas');
    }
}
