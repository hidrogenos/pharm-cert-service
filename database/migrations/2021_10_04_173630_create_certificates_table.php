<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCertificatesTable extends Migration
{
    public function up()
    {
        Schema::create('certificates', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('nro_control');
            $table->string('id_pieza');
            $table->string('producto');
            $table->string('lote');
            $table->string('lote_granel');
            $table->string('cliente');
            $table->string('registro_sanitario');
            $table->date('fecha_fabricacion');
            $table->date('fecha_inicio_analisis');
            $table->date('fecha_recpecion_muestra');
            $table->string('cod_especificacion');
            $table->integer('orden_produccion');
            $table->string('cantidad');
            $table->date('fecha_vencimiento');
            $table->date('fecha_terminacion_analisis');
            $table->string('observaciones', 500);
            $table->string('conclusion', 500);
            $table->boolean('estado');

            $table->timestamps();

            $table->index('nro_control','idx_certificates_nro_control');
        });
    }

    public function down()
    {
        Schema::dropIfExists('certificates');
    }
}
