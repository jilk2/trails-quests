<?php

namespace Database\Seeders;

use App\Models\Tag;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        foreach (['quest', 'tips', 'bossfights'] as $name) {
            Tag::factory()->create([
                'name' => $name,
            ]);
        }
    }
}
