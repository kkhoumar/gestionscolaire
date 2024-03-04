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
        Schema::create('inscriptions', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_etudiant');
            $table->foreign('id_etudiant')->references('id_etud')->on('etudiants');
            $table->unsignedBigInteger('id_section');
            $table->foreign('id_section')->references('id_sect')->on('sections');
            $table->unsignedBigInteger('id_specialite');
            $table->foreign('id_specialite')->references('id_sp')->on('specialites');
            $table->string('date_inscription');
            $table->string('numero');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('inscriptions');
    }
};
