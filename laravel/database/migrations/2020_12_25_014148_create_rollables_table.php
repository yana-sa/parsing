<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRollablesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rollable', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('role');
            $table->unsignedInteger('movie');
            $table->unsignedInteger('cast');

            //Foreign Keys

            $table->foreign('role')
                ->references('id')
                ->on('roles');
            $table->foreign('movie')
                ->references('imdb_title_id')
                ->on('movies');
            $table->foreign('cast')
                ->references('imdb_name_id')
                ->on('casts');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('rollable');
    }
}
