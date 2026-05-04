<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Scholarship;

class ScholarshipsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Scholarship::create([
            'name' => 'Bahrain Tech Excellence',
            'min_gpa' => 3.8,
            'description' => 'A full scholarship for top-tier engineering students.'
        ]);

    }
}
