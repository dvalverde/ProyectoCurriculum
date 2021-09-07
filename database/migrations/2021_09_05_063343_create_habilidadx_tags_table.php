<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHabilidadxTagsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('habilidadx_tags', function (Blueprint $table) {
            $table->integer('id_habilidad')->unsigned();
            $table->integer('id_tag')->unsigned();
            $table->unique(["id_tag", "id_habilidad"], 'comp_key');
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
        Schema::dropIfExists('habilidadx_tags');
    }
}
