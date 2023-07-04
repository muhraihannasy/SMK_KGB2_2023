<?php

namespace Database\Seeders;

use App\Models\Competency;
use Faker\Provider\ar_EG\Company;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CompetencySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Competency::create([
            'name' => 'Teknik Komputer dan Jaringan',
        ]);

        Competency::create([
            'name' => 'Akutansi Lembaga Keuangan',
        ]);

        Competency::create([
            'name' => 'Otomatisasi Tata Kelola Perkantoran',
        ]);
    }
}
