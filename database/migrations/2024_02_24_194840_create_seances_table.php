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
        Schema::create('seances', function (Blueprint $table) {
            $table->id('id_seanc');
            $table->unsignedBigInteger('id_module');
            $table->foreign('id_module')->references('id_m')->on('modules');
            $table->string('heure_debut');
            $table->string('heure_fin');
            $table->string('salle');
            $table->string('type_de_seance');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('seances');
    }
};
