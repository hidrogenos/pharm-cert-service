<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVariablesTable extends Migration
{
    public function up()
    {
        Schema::create('variables', function (Blueprint $table) {

            $table->uuid('id')->primary();
            $table->string('ensayo');
            $table->string('especificaciones', 500);
            $table->string('metodo');
            $table->boolean('resultado');
            $table->string('tipo_variable');
            $table->uuid('certificate_id');

            $table->timestamps();

            $table->foreign('certificate_id')->references('id')->on('certificates')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('variables');
    }
}
