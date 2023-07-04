<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Study>
 */
class StudyFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->randomElement(['Bahassa Inggris', 'Bahasa Indonesia', 'Matematika', 'PKN', 'IPS', "Fisika", 'Kimia', 'AIJ', 'TLJ', 'ASJ', 'PKK', 'Bahasa Sunda', 'Penjaskes'])
        ];
    }
}
