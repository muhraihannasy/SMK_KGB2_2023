<?php

namespace Database\Seeders;

use App\Models\PaymentRegistration;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PaymentRegistrationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        PaymentRegistration::factory(10)->create();
    }
}
