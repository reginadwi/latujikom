<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dokter extends Model
{
    protected $fillabel =['kd_dokter','kd_poli','tgl_kunjungan','kd_user','nm_dokter','sip','tempat_lhr','no_tlp','alamat'];
    public $timestamps = true;


    public function Dokter()
    {
         return $this->hasMany('App\Dokter','kd_doker');

    }
    public function Poliklinik()
        {
            return $this->belongsTo('App\Poliklinik','kd_dokter');

        }
}
