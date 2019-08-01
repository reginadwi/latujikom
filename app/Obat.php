<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Obat extends Model
{
    protected $fillabel =['kd-obat','nm_obat','jml_obat','ukuran','harga'];
    public $timestamps = true;


    public function Pasien()
    {
         return $this->hasMany('App\Pasien','nm_pasien');

    }
}
