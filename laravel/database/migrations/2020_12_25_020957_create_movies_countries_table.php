<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMoviesCountriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('movies_countries', function (Blueprint $table) {
            $table->unsignedInteger('country_id')->index();
            $table->unsignedInteger('movie_id')->index();

            //Foreign Keys
            $table->foreign('country_id')
                ->references('id')
                ->on('countries');
            $table->foreign('movie_id')
                ->references('imdb_title_id')
                ->on('movies');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('movies_countries');
    }
}
