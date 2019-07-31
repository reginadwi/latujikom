<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDoktersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dokters', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('kd_dokter');
            $table->integer('kd_poli');
            $table->integer('tgl_kunjungan');
            $table->integer('kd_user');
            $table->string('nm_dokter');
            $table->string('SIP');
            $table->string('tempat_lhr');
            $table->integer('no_tlp');
            $table->string('alamat');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('dokters');
    }
}
