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
        Schema::create('registration_ppdb_scholarships', function (Blueprint $table) {
            $table->id();
            $table->uuid('uuid');

            $table->foreignId('registration_ppdb_id');
            $table->string('type');
            $table->year('year_start');
            $table->year('year_finish');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('registration_ppdb_scholarships');
    }
};
