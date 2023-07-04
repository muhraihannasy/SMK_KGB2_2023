<?php

namespace Database\Seeders;

use App\Models\DetailUser;
use Database\Factories\DetailUserFactory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DetailUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DetailUser::factory(10)->create();
    }
}
