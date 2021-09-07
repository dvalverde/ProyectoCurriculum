<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmailxCurriculaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('emailx_curricula', function (Blueprint $table) {
            $table->string('direccion_correo');
            $table->integer('id_curriculum')->unsigned();
            $table->unique(["id_curriculum", "direccion_correo"], 'comp_key');
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
        Schema::dropIfExists('emailx_curricula');
    }
}
