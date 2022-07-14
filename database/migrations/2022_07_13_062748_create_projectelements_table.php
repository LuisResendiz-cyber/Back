<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projectelements', function (Blueprint $table) {
            $table->id();
            $table->string('System');
            $table->string('PyID');
            $table->string('Line_Equipment');
            $table->string('Service');
            $table->string('Area');
            $table->string('Tag');
            $table->integer('Num');
            $table->integer('Step_1');
            $table->integer('Step_2');
            $table->integer('Step_3');
            $table->integer('Step_4');
            $table->integer('Step_5');
            $table->integer('Progress');
            $table->string('Instrument_type');
            $table->unsignedBigInteger('project_id');
            $table->timestamps();
            $table->foreign('project_id')->references('id')->on('projects');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('projectelements');
    }
};
