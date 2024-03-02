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
        Schema::create('notes', function (Blueprint $table) {
            $table->id('id_not');
            $table->unsignedBigInteger('id_etudiant');
            $table->foreign('id_etudiant')->references('id_etud')->on('etudiants');
            $table->unsignedBigInteger('id_examen');
            $table->foreign('id_examen')->references('id_ex')->on('examens');
            $table->integer('note');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('notes');
    }
};
