<?php

namespace Database\Seeders;

use App\Models\Student;
use Illuminate\Database\Seeder;

class StudentSeeder extends Seeder
{
    public function run()
    {
        Student::create([
            'name' => 'Juan Pérez',
            'email' => 'juan@example.com',
            'phone' => '1234567890',
            'language' => 'Español'
        ]);

        Student::create([
            'name' => 'María García',
            'email' => 'maria@example.com',
            'phone' => '0987654321',
            'language' => 'Inglés'
        ]);
    }
}