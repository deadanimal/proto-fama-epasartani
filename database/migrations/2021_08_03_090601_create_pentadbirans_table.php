<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePentadbiransTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pentadbirans', function (Blueprint $table) {
            $table->id('pentadbiran_id');
            $table->string('lokasi_pasartani', 100);
            $table->time('masa_operasi', $precision = 0);
            $table->string('status_kedai', 100);
            $table->string('kategori', 100);
            $table->string('naziran', 100);
            $table->string('status', 100);
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
        Schema::dropIfExists('pentadbirans');
    }
}
