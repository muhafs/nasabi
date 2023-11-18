<?php

namespace Database\Seeders;

use App\Models\Member;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class MemberSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $members = [
            [
                'full_name' => 'Hafs',
                'gender' => 'M'
            ],
            [
                'full_name' => 'Salihah',
                'gender' => 'F'
            ],
            [
                'full_name' => 'Sadikin',
                'gender' => 'M'
            ],
            [
                'full_name' => 'Rusmayati',
                'gender' => 'F'
            ],
            [
                'full_name' => 'Muhamad',
                'gender' => 'M',
                'father_id' => 1,
                'mother_id' => 2,
            ],
            [
                'full_name' => 'Hanan',
                'gender' => 'F',
                'father_id' => 1,
                'mother_id' => 2,
            ],
            [
                'full_name' => 'Lumaah',
                'gender' => 'F',
                'father_id' => 1,
                'mother_id' => 2,
            ],
            [
                'full_name' => 'Hafsah',
                'gender' => 'F',
                'father_id' => 1,
                'mother_id' => 2,
            ],
            [
                'full_name' => 'Abdullah',
                'gender' => 'M',
                'father_id' => 1,
                'mother_id' => 2,
            ],
            [
                'full_name' => 'Ghaniah',
                'gender' => 'F',
                'father_id' => 1,
                'mother_id' => 2,
            ],
            [
                'full_name' => 'Hur',
                'gender' => 'F',
                'father_id' => 1,
                'mother_id' => 2,
            ],
            [
                'full_name' => 'Hani',
                'gender' => 'F',
                'father_id' => 1,
                'mother_id' => 2,
            ],
            [
                'full_name' => 'Mahmudah',
                'gender' => 'F',
                'father_id' => 1,
                'mother_id' => 2,
            ],
            [
                'full_name' => 'Maryam',
                'gender' => 'F',
                'father_id' => 1,
                'mother_id' => 2,
            ],
            [
                'full_name' => 'Fira',
                'gender' => 'F',
                'father_id' => 3,
                'mother_id' => 4,
            ],
            [
                'full_name' => 'Uwais',
                'gender' => 'M',
                'father_id' => 5,
                'mother_id' => 15,
            ],
        ];

        foreach ($members as $member) {
            Member::create([
                'full_name' => $member['full_name'],
                'gender' => $member['gender'],
                'father_id' => $member['father_id'] ?? null,
                'mother_id' => $member['mother_id'] ?? null,
            ]);
        }
    }
}
