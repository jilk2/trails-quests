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
                'description' => 'In Trails in the Sky Second Chapter volgen Estelle en Joshua een spoor van verdwenen documenten tijdens een optionele quest. Praat met de inwoners van de stad en controleer eerdere locaties opnieuw, want belangrijke aanwijzingen worden niet altijd direct op de kaart aangegeven. Neem de tijd om gesprekken volledig te lezen en bezoek winkels, gilden en herbergen opnieuw nadat je nieuwe informatie hebt gevonden. Sommige personages geven pas een bruikbare aanwijzing wanneer je eerst met iemand anders hebt gesproken. Door rustig te onderzoeken ontdek je niet alleen de documenten, maar ook extra achtergrondinformatie over de stad, de betrokken personages en de reden waarom deze quest belangrijk is.',
            ],
            [
                'tag_id' => 2,
                'title' => 'Handige tips voor het plannen van quests',
                'description' => 'Plan je quests in Trails from Zero goed, zodat je geen brieven, verborgen doelen of beloningen mist. Controleer regelmatig het questlogboek en rond opdrachten af voordat het verhaal naar een volgende fase gaat, omdat sommige side quests daarna niet meer beschikbaar zijn. Kijk ook naar de deadline van een opdracht en let op meldingen in de stad. Een quest kan meerdere stappen hebben die pas zichtbaar worden na een gesprek of een bezoek aan een nieuwe locatie. Door eerst optionele opdrachten te doen, verdien je extra sepith, mira en items. Bovendien leer je de inwoners en de politieke situatie van Crossbell beter kennen.',
            ],
            [
                'tag_id' => 3,
                'title' => 'De strijd tegen Loewe',
                'description' => 'Loewe is een van de zwaarste tegenstanders in Trails in the Sky the 3rd. Let vooral op zijn hoge snelheid en sterke area-aanvallen, en bewaar je beste crafts voor momenten waarop hij meerdere personages tegelijk kan raken. Healing en goede positioning zijn belangrijker dan alleen hoge aanvalskracht. Zorg dat je party voldoende CP heeft voordat het gevecht begint en gebruik quartz die je verdediging en snelheid verbeteren. Houd de turn order goed in de gaten, want een verkeerd moment voor een aanval kan ervoor zorgen dat meerdere personages tegelijk geraakt worden. Speel geduldig en gebruik buffs voordat je je sterkste arts inzet.',
            ],
            [
                'tag_id' => 1,
                'title' => 'Een nieuwe opdracht in Crossbell',
                'description' => 'Lloyd en zijn team onderzoeken een mysterie in Trails from Zero dat begint als een eenvoudige opdracht voor de Special Support Section. Wat eerst een kleine hulpvraag lijkt, leidt naar nieuwe informatie over Crossbell en de groepen die achter de schermen invloed proberen uit te oefenen. Onderweg moet het team verschillende verklaringen vergelijken en bepalen welke informatie betrouwbaar is. Bezoek de genoemde locaties in een logische volgorde en praat opnieuw met personages wanneer het verhaal verandert. De quest laat goed zien hoe kleine problemen verbonden kunnen zijn met grotere conflicten. Naast de beloning krijg je meer inzicht in Lloyd, Ellie, Randy en Tio als team.',
            ],
            [
                'tag_id' => 2,
                'title' => 'Kies je party slim in Trails of Cold Steel',
                'description' => 'Combineer personages met verschillende quartz en crafts, zodat je tijdens moeilijke gevechten altijd een goede rolverdeling hebt. Laat een personage focussen op healing, een ander op buffs en gebruik aanvallende arts bij vijanden die gevoelig zijn voor een bepaald element. Kijk niet alleen naar het hoogste aanvalscijfer, maar ook naar snelheid, EP en de beschikbare slots. Een snelle support kan een buff plaatsen voordat de vijand aanvalt, terwijl een sterke caster meerdere zwakke vijanden tegelijk kan raken. Pas je setup aan per gebied en bewaar herstelitems voor lange gevechten of onverwachte bossfights.',
            ],
            [
                'tag_id' => 3,
                'title' => 'De aanval op de cryptid',
                'description' => 'Bereid je goed voor op een cryptid-gevecht in Trails through Daybreak. Gebruik buffs voordat de vijand zijn sterkste aanvallen inzet en houd genoeg healing-items bij de hand. Een goed opgebouwde party met verschillende aanvalstypes maakt het gevecht een stuk overzichtelijker. Controleer vooraf of iedereen genoeg HP en EP heeft en vervang quartz die weinig voordeel geeft tegen deze specifieke vijand. Probeer de cryptid op een gunstige plek te benaderen, zodat je niet meteen omsingeld wordt. Let tijdens het gevecht op veranderende patronen en gebruik een sterke craft wanneer de vijand tijdelijk kwetsbaar is.',
            ],
            [
                'tag_id' => 1,
                'title' => 'De vermiste kat van Liberl',
                'description' => 'Een korte maar leuke side quest in Trails in the Sky waarin je in de stad op zoek gaat naar een vermiste kat. Onderzoek de steegjes, vraag voorbijgangers om hulp en let op kleine aanwijzingen in de omgeving om de quest succesvol af te ronden. De opdracht lijkt eenvoudig, maar moedigt je aan om de stad beter te leren kennen en met verschillende inwoners te praten. Controleer plaatsen waar dieren zich kunnen verstoppen en loop niet te snel naar de volgende hoofdmissie. Na het vinden van de kat krijg je een kleine beloning en een extra gesprek dat de sfeer van de stad versterkt.',
            ],
            [
                'tag_id' => 2,
                'title' => 'Gebruik arts en crafts effectief',
                'description' => 'Een beginnerstip voor de Trails-serie: wissel gewone aanvallen af met arts en crafts en let goed op de delay van je acties. Door je turn order goed te bekijken kun je vijanden onderbreken, buffs op het juiste moment gebruiken en voorkomen dat je party meerdere aanvallen achter elkaar opvangt. Gewone aanvallen besparen EP, terwijl arts handig zijn tegen vijanden met een duidelijke elementaire zwakte. Crafts kosten meestal CP en zijn daarom vooral nuttig op belangrijke momenten. Probeer verschillende combinaties uit voordat je een moeilijk gebied binnengaat en kijk welke personages elkaar goed aanvullen.',
            ],
            [
                'tag_id' => 3,
                'title' => 'De eindbaas van Trails from Zero',
                'description' => 'Neem voor het eindgevecht voldoende EP-herstel mee en zorg dat je party tegen verschillende aanvalstypes bestand is. Test vooraf je quartz-combinaties en zorg dat minstens een van je personages betrouwbaar kan healen, zodat je niet volledig afhankelijk bent van items tijdens de tweede fase. Controleer ook of iedereen de beste beschikbare wapens en armor draagt. Begin het gevecht met een plan voor buffs, healing en het herstellen van statusproblemen. Bewaar sterke S-Crafts voor een kwetsbaar moment en blijf bewegen wanneer aanvallen een groot gebied raken. Rustig spelen is vaak effectiever dan voortdurend aanvallen.',
            ],
            [
                'tag_id' => 1,
                'title' => 'Een onderzoek in Calvard',
                'description' => 'In Trails through Daybreak begint een onderzoek in Edith als een gewone opdracht, maar al snel raakt Van Arkride betrokken bij een groter conflict. Verzamel informatie in de verschillende wijken, vergelijk de verklaringen van getuigen en bepaal daarna welke route je door het verhaal wilt volgen. Neem de tijd om de stad te verkennen voordat je naar het volgende doel gaat, want gesprekken kunnen extra details en nieuwe opties opleveren. De keuze van je route verandert niet alleen de volgorde van gebeurtenissen, maar geeft ook een ander beeld van de betrokken partijen. Zo voelt de quest als een echt onderzoek in plaats van een rechte lijn naar het eindpunt.',
            ],
        ));
    }
}
