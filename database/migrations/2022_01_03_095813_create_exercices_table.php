<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExercicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('exercices', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name_exercice');
            $table->string('level');
            $table->string('device');
            $table->string('type_exercice');
            $table->integer('muscle_id');
            $table->string('image');
            $table->integer('id_gym_room')->index();
            $table->time('time_exercice');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('exercices');
    }
}
