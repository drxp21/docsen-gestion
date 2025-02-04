<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('creneaus', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('jour');
            $table->string('heure_debut')->nullable();
            $table->string('heure_fin')->nullable();
            $table->boolean('reserve')->default(false);
            $table->foreignId('praticien_id')->nullable()->constrained()->onDelete('cascade');
            $table->foreignId('hopital_id')->nullable()->constrained()->onDelete('cascade')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('creneaus');
    }
};
