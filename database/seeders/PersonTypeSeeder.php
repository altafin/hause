<?php

namespace Database\Seeders;

use App\Models\Person\PersonType;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PersonTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $arrTypes = array(
            array(
                'id' => 1,
                'name' => 'Física',
                'system' => true,
            ),
            array(
                'id' => 2,
                'name' => 'Jurídica',
                'system' => true,
            ),
        );
        foreach ($arrTypes as $types) {
            PersonType::factory()->create($types);
        }

    }
}
