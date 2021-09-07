<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExperienciaxTagsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('experienciax_tags', function (Blueprint $table) {
            $table->integer('id_experiencia')->unsigned();
            $table->integer('id_tag')->unsigned();
            $table->unique(["id_tag", "id_experiencia"], 'comp_key');
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
        Schema::dropIfExists('experienciax_tags');
    }
}
