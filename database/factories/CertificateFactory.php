<?php

use App\Certificate;
use Illuminate\Database\Eloquent\Factories\Factory;

class CertificateFactory extends Factory
{
    protected $model = Certificate::class;

    public function definition(): array
    {
        return [
            'id' => $this->faker->uuid(),
            'nro_control' => $this->faker->randomKey(),
            'id_pieza' => $this->faker->randomKey(),
            'producto' => $this->faker->name(),
            'lote' => $this->faker->randomKey(),
            'lote_granel' => $this->faker->randomKey(),
            'cliente' => $this->faker->name(),
            'registro_sanitario' => $this->faker->text,
            'fecha_fabricacion' => $this->faker->date,
            'fecha_inicio_analisis' => $this->faker->date,
            'fecha_recpecion_muestra' => $this->faker->date,
            'cod_especificacion' => $this->faker->randomKey(),
            'orden_produccion' => $this->faker->numberBetween(00000000, 99999999),
            'cantidad' => $this->faker->numberBetween(000, 99999) . $this->faker->randomLetter,
            'fecha_vencimiento' => $this->faker->date,
            'fecha_terminacion_analisis' => $this->faker->date,
            'observaciones' => $this->faker->text,
            'conclusion' => $this->faker->text,
            'estado' => $this->faker->boolean
        ];
    }
}
