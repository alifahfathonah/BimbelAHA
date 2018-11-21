<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTransaksiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transaksi', function (Blueprint $table) {
            $table->increments('id_transaksi');
            $table->integer('id_user')->unsigned();
            $table->foreign('id_user')->references('id_user')->on('users');
            $table->integer('id_jadwal')->unsigned();
            $table->foreign('id_jadwal')->references('id_jadwal')->on('jadwals');
            $table->integer('status_bayar')->unsigned();
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
        Schema::dropIfExists('transaksi');
    }
}
