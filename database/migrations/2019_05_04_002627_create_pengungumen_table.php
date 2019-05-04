<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePengungumenTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pengungumen', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('kelas_id');
            $table->string('name');
            $table->string('konten');
            $table->date('tgltampil');
            $table->date('tglselesai');
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
        Schema::dropIfExists('pengungumen');
    }
}
