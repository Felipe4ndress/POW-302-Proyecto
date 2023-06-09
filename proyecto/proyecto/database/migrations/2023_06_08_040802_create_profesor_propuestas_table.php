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
        Schema::create('profesor_propuesta', function (Blueprint $table) {
            $table->integer('propuesta_id');
            $table->string('profesor_rut',10);
            $table->date('fecha');
            $table->time('hora');
            $table->text('comentario');
            $table->timestamps();
            $table->primary('propuesta_id');
            $table->foreign('propuesta_id')->references('id')->on('propuestas');
            
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('profesor_propuesta');
    }
};
