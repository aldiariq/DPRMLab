<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePraktikumsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('praktikums', function (Blueprint $table) {
            $table->bigIncrements('id_praktikums')->unsigned();
            $table->string('hari_praktikums');
            $table->time("waktumulai_praktikums");
            $table->time("waktuselesai_praktikums");
            $table->string('matakuliah_praktikums');
            $table->string('kelas_praktikums');
            $table->string('dosen_praktikums');
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
        Schema::dropIfExists('praktikums');
    }
}
