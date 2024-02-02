<?php

namespace Database\Seeders;

use App\Models\Technology;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TechnologySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $array_technology = config("technologies");

        foreach ($array_technology as $technology_item) {
            $array_technology = new Technology();
            $array_technology->fill($technology_item);
            $array_technology->save();
        }
    }
}
