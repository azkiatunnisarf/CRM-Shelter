<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKontraksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kontraks', function (Blueprint $table) {
            $table->increments('id_kontrak');
            $table->string('kode_customer');
            $table->string('nama_perusahaan');
            $table->datetime('periode_kontrak');
            $table->datetime('akhir_periode');
            $table->string('srt_pemberitahuan');
            $table->datetime('tgl_srt_pemberitahuan');
            $table->string('srt_penawaran');
            $table->datetime('tgl_srt_penawaran');
            $table->string('dealing');
            $table->datetime('tgl_dealing');
            $table->string('posisi_pks');
            $table->string('closing');
            $table->timestamps();
        });
        // Schema::table('kontraks', function($table)
        // {
        //     $table->foreign('kode_customer')
        //         ->references('kode_customer')
        //         ->on('customer')
        //         ->onDelete('cascade');
        // });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('kontraks');
    }
}
