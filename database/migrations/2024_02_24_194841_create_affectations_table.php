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
        Schema::create('affectations', function (Blueprint $table) {
            $table->id('id_aff');
            $table->unsignedBigInteger('id_module');
            $table->foreign('id_module')->references('id_m')->on('modules');

            $table->unsignedBigInteger('id_section');
            $table->foreign('id_section')->references('id_sect')->on('sections');

            $table->unsignedBigInteger('id_specialite');
            $table->foreign('id_specialite')->references('id_sp')->on('specialites');

            $table->unsignedBigInteger('id_enseignant');
            $table->foreign('id_enseignant')->references('id _ens')->on('enseignants');
            $table->String('date_affectation');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('affectations');
    }
};
