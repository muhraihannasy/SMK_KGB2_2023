<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

// Model
use App\Models\Study;

class StudySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Study::factory(13)->create();
    }
}
