<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHabilidadxCurriculaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('habilidadx_curricula', function (Blueprint $table) {
            $table->integer('id_habilidad')->unsigned();
            $table->integer('id_curriculum')->unsigned();
            $table->unique(["id_curriculum", "id_habilidad"], 'comp_key');
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
        Schema::dropIfExists('habilidadx_curricula');
    }
}
