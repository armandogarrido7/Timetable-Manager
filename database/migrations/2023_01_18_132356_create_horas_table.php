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
    public function up() { 
        Schema::create('horas', function (Blueprint $table) {
            $table->string('diaH');
            $table->string('horaH');
            $table->unsignedBigInteger('codAs');
            $table->primary(['diaH','horaH']);
            $table->foreign(['codAs'])->references('codAs')->on('asignaturas');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('horas');
    }
};
