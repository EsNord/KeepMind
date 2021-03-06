<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExercisesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('exercises', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('level');
            $table->boolean('seen');
            $table->mediumText('description');
            $table->string('title');
            $table->integer('countSolved');
            $table->integer('ageClass');
            $table->integer('orderInTrack');
            $table->integer('achiveRank');
            $table->string('input');
            $table->string('output');
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
        Schema::dropIfExists('exercises');
    }
}
