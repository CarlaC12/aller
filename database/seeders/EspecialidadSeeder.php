<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Especialidad;

class EspecialidadSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $especialidad1 = Especialidad::create(['descripcion'=>'Medico Gnral']);
        $especialidad2 = Especialidad::create(['descripcion'=>'Cardiologia']);
        $especialidad3 = Especialidad::create(['descripcion'=>'Neurocirugia']);
        $especialidad4 = Especialidad::create(['descripcion'=>'Dermatologia']);
        $especialidad5 = Especialidad::create(['descripcion'=>'Fisioterapia']);
        $especialidad6 = Especialidad::create(['descripcion'=>'Oftamologia']);
    }
}
