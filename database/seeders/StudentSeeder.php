<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Student;
use Illuminate\Support\Carbon;

class StudentSeeder extends Seeder
{
    public function run(): void
    {
        $now = Carbon::now();

        Student::insert([
            [
                'nim' => '20250001',
                'name' => 'Aisya Aryani Wijaya',
                'gender_id' => 2,
                'phone' => '081234567890',
                'address' => 'Jl. Imam Bonjol',
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'nim' => '20250002',
                'name' => 'Dimas Alif Pratama',
                'gender_id' => 1,
                'phone' => '081298877665',
                'address' => 'Jl. Sudirman',
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'nim' => '20250003',
                'name' => 'Rina Marlina',
                'gender_id' => 2,
                'phone' => '081345678901',
                'address' => 'Jl. Melur',
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'nim' => '20250004',
                'name' => 'Ahmad Fauzan',
                'gender_id' => 1,
                'phone' => '081356789012',
                'address' => 'Jl. Dahlia',
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'nim' => '20250005',
                'name' => 'Siti Nurhaliza',
                'gender_id' => 2,
                'phone' => '081367890123',
                'address' => 'Jl. Merdeka',
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'nim' => '20250006',
                'name' => 'Budi Santoso',
                'gender_id' => 1,
                'phone' => '081378901234',
                'address' => 'Jl. Mawar',
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'nim' => '20250007',
                'name' => 'Citra Kirana',
                'gender_id' => 2,
                'phone' => '081389012345',
                'address' => 'Jl. Anggrek',
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'nim' => '20250008',
                'name' => 'Rafi Hidayat',
                'gender_id' => 1,
                'phone' => '081390123456',
                'address' => 'Jl. Teratai',
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'nim' => '20250009',
                'name' => 'Nadia Lestari',
                'gender_id' => 2,
                'phone' => '081401234567',
                'address' => 'Jl. Kenanga',
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'nim' => '20250010',
                'name' => 'Deni Firmansyah',
                'gender_id' => 1,
                'phone' => '081412345678',
                'address' => 'Jl. Seroja',
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'nim' => '20250011',
                'name' => 'Putri Amalia',
                'gender_id' => 2,
                'phone' => '081423456789',
                'address' => 'Jl. Sakura',
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'nim' => '20250012',
                'name' => 'Agus Supriyadi',
                'gender_id' => 1,
                'phone' => '081434567890',
                'address' => 'Jl. Garuda',
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'nim' => '20250013',
                'name' => 'Farah Diba',
                'gender_id' => 2,
                'phone' => '081445678901',
                'address' => 'Jl. Cendrawasih',
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'nim' => '20250014',
                'name' => 'Hendra Wijaya',
                'gender_id' => 1,
                'phone' => '081456789012',
                'address' => 'Jl. Kutilang',
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'nim' => '20250015',
                'name' => 'Intan Permata',
                'gender_id' => 2,
                'phone' => '081467890123',
                'address' => 'Jl. Merpati',
                'created_at' => $now,
                'updated_at' => $now,
            ],
        ]);
    }
}
