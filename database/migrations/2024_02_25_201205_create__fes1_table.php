<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('_fes1', function (Blueprint $table) {
            //$table->id();
            $table->string('CVE_INC');
            $table->string('Sitio_ID');
            $table->string('CAT');
            $table->string('responsable');
            $table->string('Paraje');
            $table->string('Predio');
            $table->string('Municipio');
            $table->string('Estado');
            $table->float('Altitud');
            $table->string('Waypoint_ID');
            $table->float('CoordX');
            $table->float('CoordY');
            $table->float('Precision_');
            $table->integer('Exposicion');
            $table->float('Pendiente');
            $table->integer('DPF');
            $table->string('Fecha');
            $table->string('Hr_Inicio');
            $table->string('Hr_Termino');
            $table->float('CGE_CAR');
            $table->float('CGE_CHE');
            $table->float('CGE_CRE');
            $table->float('CGE_CSE');
            $table->float('CGE_CRO');
            $table->string('Observaciones');
            $table->boolean('OnServer');
            //$table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('_fes1');
    }
};
