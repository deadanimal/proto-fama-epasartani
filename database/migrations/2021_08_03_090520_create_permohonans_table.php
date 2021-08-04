<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePermohonansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('permohonans', function (Blueprint $table) {
            $table->id('permohonan_id');
            $table->string('no_syarikat', 100);
            $table->string('nama_syarikat', 100);
            $table->string('nama_pemilik', 100);
            $table->string('lokasi', 100);
            $table->date('tarikh');
            $table->foreignId('fail_id');
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
        Schema::dropIfExists('permohonans');
    }
}
