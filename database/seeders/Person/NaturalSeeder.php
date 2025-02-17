<?php

namespace Database\Seeders\Person;

use App\Models\Document\Cpf;
use App\Models\Document\Rg;
use App\Models\Person\Natural;
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
            ->create()
            ->each(function (Natural $natural) {
                Cpf::factory(1)->create([
                    'person_id' => $natural->id,
                ]);
                Rg::factory(1)->create([
                    'person_id' => $natural->id,
                ]);
            });
    }
}
