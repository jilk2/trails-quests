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

    <div>
        <form class="mb-5 flex flex-wrap items-center gap-4"
    action="{{ route('posts.index') }}" method="get">

    <div class="flex items-center gap-2 whitespace-nowrap">
        <label for="tag" class="text-sm font-semibold text-slate-700">
            Tag
        </label>

        <select name="tag" id="tag"
            class="rounded-lg border-slate-300 bg-white px-8 py-2 text-sm text-slate-700 shadow-sm focus:border-cyan-500 focus:ring-cyan-500">
            <option value="">Alle tags</option>

            @foreach ($tags as $tag)
                <option value="{{ $tag->name }}" @selected(request('tag') === $tag->name)>
                    {{ $tag->name }}
                </option>
            @endforeach
        </select>
    </div>

    <div class="flex items-center gap-2">
        <label for="search-term" class="text-sm font-semibold text-slate-700">
            Zoeken
        </label>

        <input type="text" name="search-term" id="search-term"
            value="{{ request('search-term') }}"
            class="rounded-lg border-slate-300 px-3 py-2 text-sm shadow-sm focus:border-cyan-500 focus:ring-cyan-500">
    </div>

    <button type="submit"
        class="rounded-lg bg-cyan-600 px-5 py-2.5 text-sm font-semibold text-white shadow-sm transition hover:bg-cyan-700 focus:outline-none focus:ring-2 focus:ring-cyan-500 focus:ring-offset-2">
        Zoeken
    </button>
</form>
    </div>
    <div class="grid grid-cols-3 gap-6">
        @forelse ($data as $post)
            <x-card :post="$post" />
        @empty
            <p>Er zijn geen posts gevonden</p>
        @endforelse
    </div>

    <div class="mt-8">
        {{ $data->links() }}
    </div>
</x-layout>