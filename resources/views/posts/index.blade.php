<x-layout title="test">
    @auth
        <a href="{{ route("posts.create") }}">nieuwe post</a>
    @endauth
    <h1>Overzicht van alle posts</h1>
    <x-card class="max-w-400" :posts="$data">
    </x-card>
</x-layout>