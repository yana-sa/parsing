<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCastsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('casts', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('imdb_name_id');
            $table->string('name');
            $table->tinyInteger('height')->nullable();
            $table->string('bio')->nullable();
            $table->date('date_of_birth');
            $table->string('place_of_birth')->nullable();
            $table->tinyInteger('children')->nullable();
            $table->boolean('is_usa')->default(false);
            $table->boolean('is_europe')->default(false);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('casts');
    }
}
