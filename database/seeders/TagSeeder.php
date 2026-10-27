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
        foreach (['tag 1', 'tag 2', 'tag 3'] as $name) {
            Tag::factory()->create([
                'name' => $name,
            ]);
        }
    }
}
