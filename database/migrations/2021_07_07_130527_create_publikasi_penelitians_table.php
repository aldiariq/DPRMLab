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
            $table->bigIncrements('id_publikasi_penelitians')->unsigned();
            $table->bigInteger('id_penelitian')->unsigned();
            $table->foreign('id_penelitian')->references('id_penelitian')->on('penelitians');
            $table->string('tempat_publikasi_penelitians');
            $table->string('ket_publikasi_penelitians');
            $table->date('tanggal_publikasi_penelitians');
            $table->string('foto_publikasi_penelitians');
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
