<?php

namespace Database\Factories;


use Illuminate\Database\Eloquent\Factories\Factory;

// Model
use App\Models\PaymentRegistration;
use App\Models\User;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\RegistrationPPDB>
 */
class RegistrationPPDBFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' => User::factory(),
            'payment_registration_id' => PaymentRegistration::factory(),
            'no_registration' => 0,
            'code_registration' => 0,
            'admin_name' => $this->faker->firstName(),
            'type_registration' => $this->faker->randomElement(['Siswa Baru', 'Pindahan', 'Kembali Bersekolah']),

            'from_school' => $this->faker->company(),
            'weigth' => 60,
            'height' => 176,
            'amount_siblings' => $this->faker->randomNumber([0, 4, 5, 6, 1, 2]),
            'gender' => $this->faker->randomElement(['Laki-Laki', 'Perempuan']),
            'special_needs' => 'normal',
            'order_family' => $this->faker->randomNumber([0, 4, 5, 6, 1, 2]),
            'religion' => $this->faker->randomElement(['Islam', 'Kristen/Protestan', 'Khatolik', 'Hindu', 'Budha', 'Khonghucu']),
            'birth_place' => $this->faker->city(),
            'birth_date' => $this->faker->date(),
            'address' => "1|1|1|1|1|1",

            'nisn' => $this->faker->creditCardNumber(),
            'nisn_image' => $this->faker,
            'kartu_keluarga_image' => $this->faker,
            'no_serial_skhus' => $this->faker->creditCardNumber(),
            'no_serial_diploma' => $this->faker->creditCardNumber(),
            'class_pick_1' => $this->faker->randomElement(['Teknik Komputer dan Jaringan', 'Akutansi Lembaga Keuangan', 'Otomatisasi Tata Kelola Perkantoran']),
            'class_pick_2' => $this->faker->randomElement(['Teknik Komputer dan Jaringan', 'Akutansi Lembaga Keuangan', 'Otomatisasi Tata Kelola Perkantoran']),
            'class_pick_3' => $this->faker->randomElement(['Teknik Komputer dan Jaringan', 'Akutansi Lembaga Keuangan', 'Otomatisasi Tata Kelola Perkantoran']),
            'no_examinee' => $this->faker->creditCardNumber('Visa'),
            'extracurricular_1' => 'Volly Ball',
            'extracurricular_2' => 'Marching Band',
            'uniform_1' => 'XL',
            'uniform_2' => 'S',
            'uniform_3' => 'XXL',
            'uniform_4' => 'XL',

            'no_kks' => $this->faker->creditCardNumber(),
            'receiver_kps' => $this->faker->randomElement(['Ya', 'Tidak']),
            'no_kps' => $this->faker->creditCardNumber(),
            'receiver_kip' => $this->faker->randomElement(['Ya', 'Tidak']),
            'name_kip' => $this->faker->lastName(),
            'reason_kip' => $this->faker->sentence(),

            'father_name' => $this->faker->firstNameMale(),
            'father_nik' => $this->faker->creditCardNumber(),
            'father_birth_place' => $this->faker->city(),
            'father_birth_date' => $this->faker->date(),
            'father_education' => $this->faker->company(),
            'father_job' => $this->faker->jobTitle(),
            'father_income' => "Rp. 1,000,000 - Rp. 1,999,999",

            'mother_name' => $this->faker->firstNameFemale(),
            'mother_nik' => $this->faker->creditCardNumber(),
            'mother_birth_place' => $this->faker->city(),
            'mother_birth_date' => $this->faker->date(),
            'mother_education' => $this->faker->company(),
            'mother_job' => $this->faker->jobTitle(),
            'mother_income' => "Rp. 1,000,000 - Rp. 1,999,999",
            'batch' => $this->faker->randomElement([1, 2, 3, 4]),
            'status' => 1
        ];
    }
}
