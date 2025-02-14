<?php

namespace Database\Seeders\Person;

use App\Models\Person\Natural;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class NaturalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Natural::factory()
            ->count(10)
            ->create();
    }
}
