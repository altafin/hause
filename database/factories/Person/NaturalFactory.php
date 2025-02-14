<?php

namespace Database\Factories\Person;

use App\Models\Person\Type;
use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Person\Natural>
 */
class NaturalFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $user = User::find(1);
        return [
            'name' => fake()->name(),
            'type_id' => 1, //Type::all()->random()->id,
            'user_id' => $user->id,
        ];
    }
}
