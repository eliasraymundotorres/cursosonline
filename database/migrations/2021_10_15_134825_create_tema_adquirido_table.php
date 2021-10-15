<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTemaAdquiridoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tema_adquirido', function (Blueprint $table) {
            $table->id();
            $table->date('fecha');
            $table->foreignId('tema_id')
                  ->nullable()
                  ->constrained('tema')
                  ->cascadeOnUpdate()
                  ->nullOnDelete();
            $table->foreignId('alumno_id')
                  ->nullable()
                  ->constrained('alumno')
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
        Schema::dropIfExists('tema_adquirido');
    }
}
