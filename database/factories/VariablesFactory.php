<?php

namespace Database\Factories;

use App\Certificate;
use App\Variables;
use Illuminate\Database\Eloquent\Factories\Factory;

class VariablesFactory extends Factory
{
    protected $model = Variables::class;

    public function definition(): array
    {
        return [
            'id' => $this->faker->uuid(),
            'ensayo' => $this->faker->randomElement(Variables::ENSAYOS),
            'especificaciones' => $this->faker->text,
            'metodo' => $this->faker->name,
            'resultado' => $this->faker->boolean,
            'tipo_variable' => $this->faker->randomElement(Variables::VARIABLES),
            'certificate_id' => Certificate::factory(),
        ];
    }
}
