<?php

namespace Database\Factories;

use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Database\Eloquent\Factories\Sequence;

/**
 * @extends Factory<Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' => User::factory(),
            'title' => fake()->name(),
            'description' => fake()->text(),
            'active' => 1
        ];
    }

    public function manual(): static
    {
        return $this->state(new Sequence(
            [
                'title' => 'De eerste post',
                'description' => 'Beschrijving van de eerste post.',
            ],
            [
                'title' => 'Wandelen in de bergen',
                'description' => 'Een mooie wandeling door de bergen.',
            ],
            [
                'title' => 'Een dag aan zee',
                'description' => 'Mijn ervaringen tijdens een dag aan zee.',
            ],
            [
                'title' => 'Tips voor beginners',
                'description' => 'Handige tips voor mensen die net beginnen.',
            ],
            [
                'title' => 'Mijn favoriete route',
                'description' => 'Dit is momenteel mijn favoriete route.',
            ],
            [
                'title' => 'Een bijzondere plek',
                'description' => 'Een plek die zeker de moeite waard is om te bezoeken.',
            ],
            [
                'title' => 'Wat neem je mee?',
                'description' => 'Een overzicht van spullen die handig zijn onderweg.',
            ],
            [
                'title' => 'Een rustig weekend',
                'description' => 'Een verslag van een rustig weekend in de natuur.',
            ],
            [
                'title' => 'Mijn beste avontuur',
                'description' => 'Het avontuur dat mij het meest is bijgebleven.',
            ],
            [
                'title' => 'Terugblik op de reis',
                'description' => 'Een korte terugblik op een geslaagde reis.',
            ],
        ));
    }
}
