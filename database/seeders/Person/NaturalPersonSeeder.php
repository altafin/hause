<?php

namespace Database\Seeders\Person;

use App\Models\Person\NaturalPerson;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class NaturalPersonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        NaturalPerson::factory()
            ->count(10)
            ->create();
    }
}
