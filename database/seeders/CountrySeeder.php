<?php

namespace Database\Seeders;

use App\Models\Country;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CountrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $countries = [
            'Indonesia',
            'Saudi Arabia',
        ];

        foreach ($countries as $country) {
            Country::create(['name' => $country]);
        }
    }
}
