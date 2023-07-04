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
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id');
            $table->foreignId('payment_monthly_id');
            $table->foreignId('competency_id');
            $table->string('class_id');
            $table->string('fullname');

            // ================= Biodata ==================== //

            $table->enum('gender', ['laki-laki', 'perempuan'])->nullable();
            $table->enum('religion', ['islam', 'kristen/protestan', 'khatolik', 'hindu', 'budha', 'khonghucu'])->nullable();
            $table->string('birth_place', 100)->nullable();
            $table->date('birth_date')->nullable();
            $table->string('address')->nullable();

            // ================= Biodata ==================== //

            $table->string('nisn')->nullable();
            $table->text('nisn_image')->nullable();
            $table->text('kartu_keluarga_image')->nullable();
            $table->string('no_serial_skhus')->nullable();
            $table->string('no_serial_diploma')->nullable();
            $table->string('no_examinee')->nullable();
            $table->string('class_pick')->nullable();
            $table->string('extracurricular')->nullable();

            // ================= Optinal ==================== //

            $table->string('no_kks')->nullable();
            $table->text('image_kks')->nullable();
            $table->string('receiver_kps')->nullable();
            $table->string('no_kps')->nullable();
            $table->text('image_kps')->nullable();
            $table->string('receiver_kip')->nullable();
            $table->string('name_kip')->nullable();
            $table->string('reason_kip')->nullable();
            $table->text('image_kip')->nullable();

            $table->string('academic_year')->nullable();
            $table->enum('status', [1, 2, 3])->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('students');
    }
};
