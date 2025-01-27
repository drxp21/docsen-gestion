<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('disponibilites', function (Blueprint $table) {
            $table->id();
            $table->foreignId('praticien_id')->constrained('users')->onDelete('cascade');
            $table->string('jour'); // Exemple : 'lundi', 'mardi', etc.
            $table->time('heure_debut');
            $table->time('heure_fin');
            $table->string('statut')->default('disponible'); // Statut par défaut
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('disponibilites');
    }
};
