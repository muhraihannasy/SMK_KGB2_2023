<?php

namespace Database\Factories;

use App\Models\RegistrationPPDB;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\PaymentRegistration>
 */
class PaymentRegistrationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'registration_ppdb_id' => RegistrationPPDB::factory(),
            'payment_amount' => '15000',
            'status' => 1
        ];
    }
}
