<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBakulsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bakuls', function (Blueprint $table) {
            $table->id('bakul_id');
            $table->foreignId('alatan_id');
            $table->foreignId('fail_id');
            $table->float('harga', 8, 2);
            $table->string('jenis_pembayaran', 100);
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
        Schema::dropIfExists('bakuls');
    }
}
