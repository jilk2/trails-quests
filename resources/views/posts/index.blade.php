<x-layout title="posts">
    @auth
        <a href="{{ route("posts.create") }}">nieuwe post</a>
    @endauth
    <h1>Overzicht van alle posts</h1>
    <div class="grid grid-cols-3 gap-6">
        @forelse ($data as $post)
            <x-card :post="$post"/>
        @empty
            <p>Er zijn geen posts gevonden</p>
        @endforelse
    </div>
</x-layout>