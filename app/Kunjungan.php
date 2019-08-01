<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kunjungan extends Model
{
    protected $fillabel =['tgl_kunjungan','no_pasien','kd_poli'];
    public $timestamps = true;


    public function Pasien()
    {
         return $this->hasMany('App\Pasien','nm_pasien');

    }
}
