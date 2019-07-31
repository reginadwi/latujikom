<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRekamMedisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rekam_medis', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('no_RM');
            $table->string('kd_tindakan');
            $table->string('kd_obat');
            $table->string('kd_user');
            $table->string('no_pasien');
            $table->string('diagnosa');
            $table->string('resep');
            $table->text('keluhan');
            $table->date('tgl_pemeriksaan');
            $table->text('ket');
            
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
        Schema::dropIfExists('rekam_medis');
    }
}
