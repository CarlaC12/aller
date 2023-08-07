<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class MedicoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nombre' => $this->faker->name(),
            'edad' => $this->faker->randomElement(['30','27','40','48']),
            'sexo' => $this->faker->randomElement(['Femenino','Masculino']),
            'direccion' => $this->faker->address(),
            'telefono' => $this->faker->randomElement(['74940481','67711536','65023894','78081456']),
            'estado' => $this->faker->randomElement(['0','1']),
            'id_especialidad' => $this->faker->randomElement(['1','2','3','4','5','6']),
        ];
    }
}
