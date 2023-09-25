<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\DetailUser;
use App\Models\Role;
use App\Models\Teacher;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::create([
            'fullname' => "Muhammad Raihan Nasywaan",
            'email' => 'muhrey@gmail.com',
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
        ]);

        \App\Models\User::factory(10)->create();

        Role::factory(1)->create([
            'name' => 'admin',
            'menu_permission' => 'all',
        ]);

        Role::factory(1)->create([
            'name' => 'adm',
            'menu_permission' => 'dashboard|administrasi',
        ]);

        Role::factory(1)->create([
            'name' => 'teacher',
            'menu_permission' => 'dashboard|',
        ]);

        Role::factory(1)->create([
            'name' => 'student',
            'menu_permission' => 'dashboard',
        ]);

        Role::factory(1)->create([
            'name' => 'registrant',
            'menu_permission' => 'dashboard|ppdb_student',
        ]);



        $this->call([
            CompetencySeeder::class,
            DetailUserSeeder::class,
            ClassRoomSeeder::class,
            PaymentRegistrationSeeder::class,
            RegistrationPPDBSeeder::class,
            StudySeeder::class,
            TeacherSeeder::class,
            TeacherStudySeeder::class,
        ]);

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
