<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePembayaransTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pembayarans', function (Blueprint $table) {
            $table->id('pembayaran_id');
            $table->string('nama_syarikat', 100);
            $table->string('nama_alatan', 100);
            $table->float('kuantiti', 8, 2);
            $table->float('jumlah_harga', 8, 2);
            $table->string('jenis_pembayaran', 100);
            $table->float('ganjaran', 8, 2);
            $table->float('bayaran', 8, 2);
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
        Schema::dropIfExists('pembayarans');
    }
}
