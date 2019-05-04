<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pengunguman extends Model
{
    protected $fillable = [
        'name','konten','tgltampil','tglselesai'
    ];

    protected $dates = [
        'tgltampil','tglselesai'
    ];

    public function kelas(){
        return $this->belongsTo('App\Kelas');
    }
}
