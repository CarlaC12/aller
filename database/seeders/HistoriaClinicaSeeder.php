<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\HistoriaClinica;
class HistoriaClinicaSeeder extends Seeder
{

    public function run()
    {
        $hu=HistoriaClinica::factory(40)->create();
    }
}
