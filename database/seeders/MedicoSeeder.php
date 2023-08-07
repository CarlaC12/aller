<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Medico;
class MedicoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $medico=Medico::factory(15)->create();
    }
}
