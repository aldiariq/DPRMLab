<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddingOndeleteForeignBimbingansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('bimbingans', function (Blueprint $table) {
            $table->dropForeign(['id_anggota']);
            $table->foreign('id_anggota')->references('id_anggota')->on('anggotas')->onDelete('cascade')->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('bimbingans', function (Blueprint $table) {
            $table->dropForeign(['id_anggota']);
            $table->foreign('id_anggota')->references('id_anggota')->on('anggotas')->change();
        });
    }
}
