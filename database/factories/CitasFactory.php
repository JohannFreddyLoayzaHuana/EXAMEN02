<?php

namespace Database\Factories;

use App\Models\Citas;
use Illuminate\Database\Eloquent\Factories\Factory;

class CitasFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Citas::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'id_paciente' => $this->faker->randomDigitNotNull,
        ' fecha_cita' => $this->faker->word,
        'id_doctor' => $this->faker->randomDigitNotNull
        ];
    }
}
