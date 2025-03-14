<?php

namespace Database\Seeders\Person;

use App\Models\Document\DocumentType;
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
            array(
                'id' => 2,
                'name' => 'CNPJ',
                'system' => true,
            ),
            array(
                'id' => 3,
                'name' => 'RG',
                'system' => true,
            ),
        );
        foreach ($arrTypes as $types) {
            DocumentType::factory()->create($types);
        }

    }
}
