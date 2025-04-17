<?php

namespace Database\Seeders;

use App\Models\Gender;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GenderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Gender::insert([
            [
                'name' => 'Laki-laki',
                'slug' => 'laki-laki',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Perempuan',
                'slug' => 'perempuan',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
