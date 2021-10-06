<?php

namespace Database\Factories;

use App\Models\Citasdetalle;
use Illuminate\Database\Eloquent\Factories\Factory;

class CitasdetalleFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Citasdetalle::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'id_detallecita' => $this->faker->randomDigitNotNull,
        'id_cita' => $this->faker->randomDigitNotNull
        ];
    }
}
