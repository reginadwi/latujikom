<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lab extends Model
{
    protected $fillabel =['kd_lab','no_RM','hasil_lab','ket'];
    public $timestamps = true;


    public function Pasien()
    {
         return $this->hasMany('App\Pasien','nm_pasien');

    }
}
