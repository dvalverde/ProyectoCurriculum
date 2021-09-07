<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRedesSocialesxCurriculaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('redes_socialesx_curricula', function (Blueprint $table) {
            $table->string('nombre_red');
            $table->integer('id_curriculum')->unsigned();
            $table->unique(["id_curriculum", "nombre_red"], 'comp_key');
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
        Schema::dropIfExists('redes_socialesx_curricula');
    }
}
