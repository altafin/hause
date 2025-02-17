<?php

namespace Database\Factories\Document;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Document\Rg>
 */
class RgFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'document_type_id' => 2,
            'value' => fake()->rg(false),
        ];
    }
}
