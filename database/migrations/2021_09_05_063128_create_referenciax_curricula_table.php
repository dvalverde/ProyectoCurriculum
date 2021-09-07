<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReferenciaxCurriculaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('referenciax_curricula', function (Blueprint $table) {
            $table->integer('id_referencia')->unsigned();
            $table->integer('id_curriculum')->unsigned();
            $table->unique(["id_curriculum", "id_referencia"], 'comp_key');
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
        Schema::dropIfExists('referenciax_curricula');
    }
}
