<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExperienciaxCurriculaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('experienciax_curricula', function (Blueprint $table) {
            $table->integer('id_experiencia')->unsigned();
            $table->integer('id_curriculum')->unsigned();
            $table->unique(["id_curriculum", "id_experiencia"], 'comp_key');
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
        Schema::dropIfExists('experienciax_curricula');
    }
}
