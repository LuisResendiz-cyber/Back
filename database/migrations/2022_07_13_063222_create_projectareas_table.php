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
        Schema::create('projectareas', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('Element_id');
            $table->string('Pendiente');
            $table->boolean('status');
            $table->integer('Element_Step');
            $table->timestamps();
            $table->foreign('Element_id')->references('id')->on('projectelements');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('projectareas');
    }
};
