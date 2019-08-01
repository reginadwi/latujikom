<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pasien extends Model
{
    protected $fillabel =['nm_pasien','jk','agama',
                        'alamat','tgl_lhr','usia','no_tlp','nm_kk','hub_kel'];
public $timestamps = true;
     
        public function Pasien()
        {
            return $this->hasMany('App\Pasien','nm_pasien');

        }

        public function Dokter()
        {
            return $this->belongsTo('App\Dokter','kd_dokter');

        }
       
        public function Kunjungan()
        {
            return $this->belongsTo('App\Kunjungan','tgl_kunjungan');

        }
        
        public function Lab()
        {
            return $this->belongsTo('App\Lab','kd_lab');

        }
        public function Tindakan()
        {
            return $this->belongsTo('App\Tindakan','kd_tindakan');

        }
        public function Obat()
        {
            return $this->belongsTo('App\Obat','kd_obat');

        }
 }
