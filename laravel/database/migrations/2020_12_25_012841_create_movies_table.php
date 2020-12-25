<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMoviesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('movies', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('imdb_title_id');
            $table->string('title');
            $table->year('year');
            $table->string('genre');
            $table->unsignedSmallInteger('duration');
            $table->string('country');
            $table->string('language')->nullable();
            $table->string('director')->nullable();
            $table->string('writer')->nullable();
            $table->string('actors');
            $table->string('description', 500);
            $table->unsignedFloat('avg_vote', 2, 1);
            $table->unsignedInteger('votes');
            $table->unsignedFloat('reviews_from_users', 5, 1)->nullable();
            $table->unsignedFloat('reviews_from_critics', 5, 1)->nullable();
            $table->boolean('is_usa');
            $table->boolean('is_europe');
            $table->boolean('is_top');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('movies');
    }
}
