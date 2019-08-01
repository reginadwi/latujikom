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
return $this->belongsTo('App\Pasien','nm_pasien');

}
}
