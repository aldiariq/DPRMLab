<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePublikasiPenelitiansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('publikasi_penelitians', function (Blueprint $table) {
            $table->bigIncrements('id_publikasi_penelitian')->unsigned();
            $table->bigInteger('id_penelitian')->unsigned();
            $table->foreign('id_penelitian')->references('id_penelitian')->on('penelitians');
            $table->string('tempat_publikasi_penelitian');
            $table->string('ket_publikasi_penelitian');
            $table->date('tanggal_publikasi_penelitian');
            $table->string('foto_publikasi_penelitian');
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
        Schema::dropIfExists('publikasi_penelitians');
    }
}
