<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RekamMedis extends Model
{
   protected $fillabel =['no_RM','kd_tindakan','kd_obat','kd_user','no_pasien',
                        'diagnosa','resep','keluhan','tgl_pemeriksaan','ket'];
   public $timestamps = true;

   public function Pasien()
   {
        return $this->hasMany('App\Pasien','no_RM');

   }
   public function Dokter()
   {
        return $this->belongsTo('App\Dokter','kd_dokter');

   }
   

}
