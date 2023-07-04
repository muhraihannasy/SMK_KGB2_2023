<?php

namespace Database\Factories;


use Illuminate\Database\Eloquent\Factories\Factory;

// Model
use App\Models\ClassRoom;
use App\Models\Study;
use App\Models\Teacher;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\TeacherStudy>
 */
class TeacherStudyFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'teacher_id' => Teacher::factory(),
            'class_id' => ClassRoom::factory(),
            'study_id' => Study::factory(),
        ];
    }
}
