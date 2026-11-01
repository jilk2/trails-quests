<x-layout title="Home">
    <div class="mx-auto max-w-4xl py-16">
        <div class="overflow-hidden rounded-2xl bg-slate-900 px-6 py-10 text-white shadow-2xl">
            @auth
                <p class="mb-4 text-sm font-semibold uppercase text-cyan-300">
                    Welkom terug, {{ Auth::user()->name }}
                </p>
            @endauth

            <h1 class="max-w-3xl text-4xl font-bold">
                Trails-Quests
            </h1>

            <h2 class="mt-4 max-w-2xl text-2xl font-semibold text-slate-200">
                Een plek voor fans van de Trails-games van Nihon Falcom.
            </h2>

            <p class="mt-6 max-w-2xl text-lg leading-8 text-slate-300">
                Deel posts over quests, tips, bossfights en character builds. Andere spelers kunnen je helpen met hints,
                advies geven of uitleggen wat je als volgende stap kunt doen.
            </p>

            <a href="{{ route('posts.index') }}"
                class="mt-8 inline-flex rounded-lg bg-cyan-600 px-5 py-3 text-sm font-semibold text-white transition hover:bg-cyan-700">
                Bekijk alle posts
            </a>
        </div>
    </div>
</x-layout>