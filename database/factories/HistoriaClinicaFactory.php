<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class HistoriaClinicaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'descripcion' =>  $this->faker->word(),
            'enfermedad_act' =>  $this->faker->word(),
            'diagnostico' =>  $this->faker->word(),
            'plan_terapeutico' =>  $this->faker->word(),


            'id_paciente' =>  $this->faker->numberBetween(1, 40),
            'id_medico' => $this->faker->numberBetween(1, 15),
        
            'id_antep' => $this->faker->numberBetween(1, 40),
            'id_antenp' => $this->faker->numberBetween(1, 40),

        ];
    }
}
