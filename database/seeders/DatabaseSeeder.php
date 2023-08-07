<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    
    public function run()
    {
        $this->call(EspecialidadSeeder::class);
        $this->call(MedicoSeeder::class);
        $this->call(HistoriaClinicaSeeder::class);
        
    }
}
