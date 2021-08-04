<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAlatansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alatans', function (Blueprint $table) {
            $table->id('alatan_id');
            $table->string('nama_alatan', 100);
            $table->float('harga', 8, 2);
            $table->float('baki_stok', 8, 2);
            $table->float('kuatiti', 8, 2);
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
        Schema::dropIfExists('alatans');
    }
}
