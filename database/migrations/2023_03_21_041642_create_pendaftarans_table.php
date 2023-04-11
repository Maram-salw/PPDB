<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePendaftaransTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pendaftarans', function (Blueprint $table) {
            $table->id();
            $table->string('no_tes');
            $table->string('nama_lengkap');
            $table->string('jk');
            $table->string('ttl');
            $table->string('agama');
            $table->string('cita_cita');
            $table->string('hobi');
            $table->string('anak_ke');
            $table->string('jumlah_saudara');
            $table->string('tinggi_badan');
            $table->string('berat_badan');
            $table->string('golongan_darah');
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
        Schema::dropIfExists('pendaftarans');
    }
}
