<x-layout title="posts">
    <div class="mb-8 flex flex-col gap-4 border-b border-black/20 pb-6 sm:flex-row sm:items-center sm:justify-between">
        <h1 class="text-3xl font-bold tracking-tight text-slate-900 sm:text-4xl">
            Overzicht van alle posts
        </h1>

        @auth
            <a href="{{ route('posts.create') }}"
                class="inline-flex items-center justify-center rounded-lg bg-slate-900 px-5 py-3 text-sm font-semibold text-white shadow-sm transition hover:bg-slate-700 focus:outline-none focus:ring-2 focus:ring-slate-500 focus:ring-offset-2">
                Nieuwe post
            </a>
        @endauth
    </div>

    <div class="grid grid-cols-3 gap-6">
        @forelse ($data as $post)
            <x-card :post="$post"/>
        @empty
            <p>Er zijn geen posts gevonden</p>
        @endforelse
    </div>
</x-layout>