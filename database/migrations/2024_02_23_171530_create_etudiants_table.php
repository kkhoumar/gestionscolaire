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
        Schema::create('etudiants', function (Blueprint $table) {
            $table->id('id_etud');
            $table->string('nom_etud');
            $table->string('prenom_etud');
            $table->string('email_etud');
            $table->String('date_n_etud');
            $table->String('lieu_n_etud');
            $table->string('numero');
            $table->String('mot_p_etud');
            $table->string('photo');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('etudiants');
    }
};
