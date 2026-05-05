<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            UniversitySeeder::class,
            CollegesSeeder::class,
            MajorSeeder::class,
<<<<<<< HEAD
            ScholarshipsSeeder::class,
=======
            AIDataSeeder::class
>>>>>>> 66336fa2366a05b018ac53c050928a1b84a15180
        ]);
    }
}
