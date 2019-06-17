<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVisitsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('visit', function (Blueprint $table) {
            $table->increments('visit_id');
            $table->string('nama_customer');
            $table->string('spv_pic');
            $table->datetime('tanggal_visit');
            $table->datetime('waktu_in');
            $table->datetime('waktu_out');
            $table->string('pic_meeted');
            $table->string('kegiatan');
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
        Schema::dropIfExists('visit');
    }
}
