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
        Schema::create('registration_ppdbs', function (Blueprint $table) {
            $table->id();
            $table->uuid('uuid');
            $table->foreignId('payment_registration_id')->nullable();
            $table->foreignId('user_id');
            $table->string('no_registration');
            $table->string('code_registration');
            $table->string('admin_name')->nullable();
            $table->enum('type_registration', ['Siswa Baru', 'Pindahan', 'Kembali Bersekolah'])->nullable();

            // ================= Biodata ==================== //

            $table->string('from_school');
            $table->string('weigth')->nullable();
            $table->string('height')->nullable();
            $table->enum('gender', ['Laki-Laki', 'Perempuan'])->nullable();
            $table->string('special_needs')->nullable();
            $table->enum('religion', ['Islam', 'Kristen/Protestan', 'Khatolik', 'Hindu', 'Budha', 'Khonghucu'])->nullable();
            $table->string('birth_place', 100)->nullable();
            $table->date('birth_date')->nullable();
            $table->string('address')->nullable();

            // ================= Biodata ==================== //

            $table->string('nisn')->nullable();
            $table->string('nik')->nullable();
            $table->text('nisn_image')->nullable();
            $table->text('kartu_keluarga_image')->nullable();
            $table->string('no_serial_skhus')->nullable();
            $table->string('no_serial_diploma')->nullable();
            $table->string('no_examinee')->nullable();
            $table->enum('competency_pick_1', ['Teknik Komputer dan Jaringan', 'Akutansi Lembaga Keuangan', 'Otomatisasi Tata Kelola Perkantoran'])->nullable();
            $table->enum('competency_pick_2', ['Teknik Komputer dan Jaringan', 'Akutansi Lembaga Keuangan', 'Otomatisasi Tata Kelola Perkantoran'])->nullable();
            $table->enum('competency_pick_3', ['Teknik Komputer dan Jaringan', 'Akutansi Lembaga Keuangan', 'Otomatisasi Tata Kelola Perkantoran'])->nullable();
            $table->string('extracurricular_1')->nullable();
            $table->string('extracurricular_2')->nullable();
            $table->string('uniform_1', 5)->nullable();
            $table->string('uniform_2', 5)->nullable();
            $table->string('uniform_3', 5)->nullable();
            $table->string('uniform_4', 5)->nullable();

            // ================= Optinal ==================== //

            $table->string('no_kks')->nullable();
            $table->text('image_kks')->nullable();
            $table->enum('receiver_kps', ['Ya', 'Tidak'])->nullable();
            $table->string('no_kps')->nullable();
            $table->text('image_kps')->nullable();
            $table->enum('receiver_kip', ['Ya', 'Tidak'])->nullable();
            $table->string('no_kip')->nullable();
            $table->string('name_kip')->nullable();
            $table->string('reason_kip')->nullable();
            $table->text('image_kip')->nullable();


            // ================= Parent ==================== //

            $table->string('father_name')->nullable();
            $table->string('father_nik')->nullable();
            $table->string('father_birth_place')->nullable();
            $table->date('father_birth_date')->nullable();
            $table->string('father_education')->nullable();
            $table->string('father_job')->nullable();
            $table->string('father_income')->nullable();

            $table->string('mother_name')->nullable();
            $table->string('mother_nik')->nullable();
            $table->string('mother_birth_place')->nullable();
            $table->date('mother_birth_date')->nullable();
            $table->string('mother_education')->nullable();
            $table->string('mother_job')->nullable();
            $table->string('mother_income')->nullable();

            $table->string('batch')->nullable();
            $table->enum('status', [1, 2, 3])->default(1)->nullable(); // 3 = sudah diterima, 2 = sedang proses, 1 = belum mengisi formulir
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('registration_ppdbs');
    }
};
