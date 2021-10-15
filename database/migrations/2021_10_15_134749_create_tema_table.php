<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTemaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tema', function (Blueprint $table) {
            $table->id();
            $table->string('titulo');
            $table->string('subtitulo');
            $table->string('contenido');
            $table->string('nivel');
            $table->string('video');
            $table->date('fechaAct');
            $table->decimal('precio');
            $table->foreignId('docente_id')
                  ->nullable()
                  ->constrained('docente')
                  ->cascadeOnUpdate()
                  ->nullOnDelete();
            $table->foreignId('curso_id')
                  ->nullable()
                  ->constrained('curso')
                  ->cascadeOnUpdate()
                  ->nullOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tema');
    }
}
