<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCustomerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customer', function (Blueprint $table) {
            $table->string('kode_perusahaan')->unique();
            $table->string('nama_perusahaan');
            $table->string('jenis_usaha');
            $table->integer('bu_id');
            $table->string('alamat');
            $table->string('provinsi');
            $table->string('kabupaten');
            $table->string('telpon');
            $table->string('fax');
            $table->string('cp');
            $table->integer('area_id');
            $table->integer('wilayah_id')->unsigned();
            $table->string('email');
            $table->timestamps();
        });
        Schema::table('customer', function($table)
        {
            $table->foreign('wilayah_id')
                ->references('wilayah_id')
                ->on('wilayah')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('customer');
    }
}
