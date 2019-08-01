<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tindakan extends Model
{
    protected $fillabel =['kd_tindakan','nm_tindakan','ket'];
    public $timestamps = true;


    public function Pasien()
    {
         return $this->hasMany('App\Pasien','nm_pasien');

    }
}
