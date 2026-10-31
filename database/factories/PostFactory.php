<?php

namespace Database\Factories;

use App\Models\Post;
use App\Models\Tag;
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
            'tag_id' => Tag::inRandomOrder()->value('id'),
            'title' => fake()->name(),
            'description' => fake()->text(),
            'active' => 1
        ];
    }

    public function manual(): static
    {
        return $this->state(new Sequence(
            [
                'tag_id' => 1,
                'title' => 'De zoektocht naar de verdwenen documenten',
                'description' => 'In Trails in the Sky Second Chapter volgen Estelle en Joshua een spoor van verdwenen documenten tijdens een optionele quest.',
            ],
            [
                'tag_id' => 2,
                'title' => 'Handige tips voor het plannen van quests',
                'description' => 'Plan je quests in Trails from Zero goed, zodat je geen brieven, verborgen doelen of beloningen mist.',
            ],
            [
                'tag_id' => 3,
                'title' => 'De strijd tegen Loewe',
                'description' => 'Loewe is een van de zwaarste tegenstanders in Trails in the Sky the 3rd. Let vooral op zijn hoge snelheid en sterke area-aanvallen.',
            ],
            [
                'tag_id' => 1,
                'title' => 'Een nieuwe opdracht in Crossbell',
                'description' => 'Lloyd en zijn team onderzoeken een mysterie in Trails from Zero dat begint als een eenvoudige opdracht voor de Special Support Section.',
            ],
            [
                'tag_id' => 2,
                'title' => 'Kies je party slim in Trails of Cold Steel',
                'description' => 'Combineer personages met verschillende quartz en crafts, zodat je tijdens moeilijke gevechten altijd een goede rolverdeling hebt.',
            ],
            [
                'tag_id' => 3,
                'title' => 'De aanval op de cryptid',
                'description' => 'Bereid je goed voor op een cryptid-gevecht in Trails through Daybreak. Gebruik buffs en houd genoeg healing-items bij de hand.',
            ],
            [
                'tag_id' => 1,
                'title' => 'De vermiste kat van Liberl',
                'description' => 'Een korte maar leuke side quest in Trails in the Sky waarin je in de stad op zoek gaat naar een vermiste kat.',
            ],
            [
                'tag_id' => 2,
                'title' => 'Gebruik arts en crafts effectief',
                'description' => 'Een beginnerstip voor de Trails-serie: wissel gewone aanvallen af met arts en crafts en let goed op de delay van je acties.',
            ],
            [
                'tag_id' => 3,
                'title' => 'De eindbaas van Trails from Zero',
                'description' => 'Neem voor het eindgevecht voldoende EP-herstel mee en zorg dat je party tegen verschillende aanvalstypes bestand is.',
            ],
            [
                'tag_id' => 1,
                'title' => 'Een onderzoek in Calvard',
                'description' => 'In Trails through Daybreak begint een onderzoek in Edith als een gewone opdracht, maar al snel raakt Van Arkride betrokken bij een groter conflict.',
            ],
        ));
    }
}
