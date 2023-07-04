<?php

namespace Database\Factories;

use App\Models\Competency;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ClassRoom>
 */
class ClassRoomFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $tkj = "tkj";
        $akl = "akl";
        $otkp = "otkp";

        return [
            'competency_id' => $this->faker->randomElement([1, 2, 3]),
            'name' => $this->faker->randomElement([$tkj . '1', $tkj . '2', $tkj . '3', $otkp . '1', $otkp . '2', $otkp . '3', $akl . '1', $akl . '2', $akl . '3'  ]),
            'grade_level' => $this->faker->randomElement(['X', 'XII', 'XI'])
        ];
    }
}
