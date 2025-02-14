<?php

namespace Database\Seeders\Person;

use App\Models\Person\Document;
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
            ->create()
            ->each(function (Natural $natural) {
                $arrDocumentos = array(1, 3);
                foreach ($arrDocumentos as $documento) {
                    Document::factory(1)->create([
                        'person_id' => $natural->id,
                        'document_type_id' => $documento,
                    ]);
                }
            });
    }
}
