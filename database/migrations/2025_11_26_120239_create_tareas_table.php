<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('tareas', function (Blueprint $table) {
            $table->id();
            $table->string('titulo');
            $table->boolean('completada')->default(false);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('tareas');
    }
};