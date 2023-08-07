<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHistoriaClinicasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('historia_clinicas', function (Blueprint $table) {
            $table->id();
            $table->string('descripcion');
            $table->string('enfermedad_act');
            $table->string('diagnostico')->nullable();
            $table->string('plan_terapeutico')->nullable();
            
            $table->unsignedBigInteger('id_paciente');
           
            $table->unsignedBigInteger('id_medico');
            $table->foreign('id_medico')->on('medicos')->references('id'); 
            $table->unsignedBigInteger('id_antep');
         
            $table->unsignedBigInteger('id_antenp');
           
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('historia_clinicas');
    }
}
