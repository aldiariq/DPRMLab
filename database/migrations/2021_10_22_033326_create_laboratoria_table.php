<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLaboratoriaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('laboratoria', function (Blueprint $table) {
            $table->bigIncrements('id_laboratoriums')->unsigned();
            $table->string('logo_laboratoriums');
            $table->string('foto_laboratoriums');
            $table->string('nama_laboratoriums');
            $table->string('penjelasan_laboratoriums');
            $table->string('instagram_laboratoriums');
            $table->string('youtube_laboratoriums');
            $table->string('github_laboratoriums');
            $table->string('email_laboratoriums');
            $table->string('warnatajuk_laboratoriums');
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
        Schema::dropIfExists('laboratoria');
    }
}
