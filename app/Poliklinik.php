<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Poliklinik extends Model
{
    protected $fillabel =['kd_poli','nm_poli','lantai'];
        public $timestamps = true;


        public function Dokter()
        {
             return $this->hasMany('App\Dokter','kd_dokter');

        }
}
