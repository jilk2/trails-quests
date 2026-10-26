<x-layout title="Home">

    @auth
    <h1 class="">Welcome {{ Auth::user()->name }}</h1>
    @endauth
    <h2 class="">Welcome op de hoofdpagina van Trails-Quests</h2>
        <p class="">Trails-Quests is een applicatie waarin je een post kan maken voor de Trails games van Nihon Falcom. Other people
            can then help you out by giving you hints or flatout tell you what you should do next.
            This site name is kind of a misleading thing. Because you can also ask for builds from other people or post your
            own character builds.
        </p>
</x-layout>