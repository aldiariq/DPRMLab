<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBimbingansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bimbingans', function (Blueprint $table) {
            $table->bigIncrements('id_bimbingan')->unsigned();
            $table->bigInteger('id_anggota')->unsigned();
            $table->foreign('id_anggota')->references('id_anggota')->on('anggotas');
            $table->bigInteger('id_pembimbing')->unsigned();
            $table->foreign('id_pembimbing')->references('id_pembimbing')->on('pembimbings');
            $table->date('tanggal_bimbingan');
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
        Schema::dropIfExists('bimbingans');
    }
}
