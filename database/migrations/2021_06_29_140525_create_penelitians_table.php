<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePenelitiansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('penelitians', function (Blueprint $table) {
            $table->bigIncrements('id_penelitian')->unsigned();
            $table->string('judul_penelitian');
            $table->string('nama_penelitian');
            $table->date('tanggal_penelitian');
            $table->enum('status_penelitian', ['SELESAI', 'BELUMSELESAI']);
            $table->string('penjelasan_penelitian');
            $table->string('foto_penelitian');
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
        Schema::dropIfExists('penelitians');
    }
}
