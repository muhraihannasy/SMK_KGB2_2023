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
        Schema::create('payment_montlies', function (Blueprint $table) {
            $table->id();
            $table->text('payment_proof')->nullable();
            $table->string('payment_amount');
            $table->enum('statu', [1, 2, 3]);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('payment_montlies');
    }
};
