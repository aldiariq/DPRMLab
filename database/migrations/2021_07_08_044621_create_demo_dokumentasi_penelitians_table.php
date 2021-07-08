<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDemoDokumentasiPenelitiansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('demo_dokumentasi_penelitians', function (Blueprint $table) {
            $table->bigIncrements('id_demo_dokumentasi_penelitian')->unsigned();
            $table->bigInteger('id_penelitian')->unsigned();
            $table->foreign('id_penelitian')->references('id_penelitian')->on('penelitians');
            $table->string('ket_demo_dokumentasi_penelitian');
            $table->string('linkvideo_demo_dokumentasi_penelitian');
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
        Schema::dropIfExists('demo_dokumentasi_penelitians');
    }
}
