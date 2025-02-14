<?php

namespace Database\Seeders\Person;

use App\Models\Person\DocumentType;
use Illuminate\Database\Seeder;

class DocumentTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $arrTypes = array(
            array(
                'id' => 1,
                'name' => 'CPF',
                'system' => true,
            ),
        );
        foreach ($arrTypes as $types) {
            DocumentType::factory()->create($types);
        }

    }
}
