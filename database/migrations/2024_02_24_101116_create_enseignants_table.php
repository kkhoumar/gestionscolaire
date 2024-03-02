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
        Schema::create('enseignants', function (Blueprint $table) {
            $table->id('id _ens');
            $table->String('nom_ens');
            $table->String('prenom_ens');
            $table->String('grade_ens');
            $table->String('date_n_ens');
            $table->String('lieu_n_ens');
            $table->String('mot_p_ens');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('enseignants');
    }
};
