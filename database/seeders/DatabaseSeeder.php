<?php

namespace Database\Seeders;

use Database\Seeders\Person\DocumentTypeSeeder;
use Database\Seeders\Person\NaturalSeeder;
use Database\Seeders\Person\TypeSeeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            UserSeeder::class,
            TypeSeeder::class,
            DocumentTypeSeeder::class,
            NaturalSeeder::class,
        ]);
        $this->command->info('User seeded!');
        $this->command->info('Person type seeded!');
        $this->command->info('Document type seeded!');
        $this->command->info('Natural Person seeded!');

        // User::factory(10)->create();

//        User::factory()->create([
//            'name' => 'Test User',
//            'email' => 'test@example.com',
//        ]);
    }
}
