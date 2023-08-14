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
        Schema::create('registration_ppdb_achievements', function (Blueprint $table) {
            $table->id();
            $table->uuid('uuid');

            $table->foreignId('registration_ppdb_id');
            $table->string('name');
            $table->string('type');
            $table->year('year');
            $table->string('level', 50);
            $table->string('organizer');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('registration_ppdb_achievements');
    }
};
