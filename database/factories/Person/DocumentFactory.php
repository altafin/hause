<?php

namespace Database\Factories\Person;

use App\Models\Person\Natural;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Person\Document>
 */
class DocumentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'document_type_id' => function (array $attributes) {
                return $attributes['document_type_id'];
            },
            'value' => function (array $attributes) {
                switch ($attributes['document_type_id']) {
                    case 1:
                        return fake()->cpf(false);
                    case 2:
                        return fake()->cnpj(false);
                    case 3:
                        return fake()->rg(false);
                }
            },
        ];
    }
}
