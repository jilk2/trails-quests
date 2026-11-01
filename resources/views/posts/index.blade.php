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
        <form class="flex flex-nowrap items-center gap-4 mb-5" action="{{ route('posts.index') }}" method="get">

            <div class="flex flex-nowrap items-center gap-2 whitespace-nowrap">
                <span>tag</span>

                @foreach ($tags as $tag)
                                <a href="{{ route('posts.index', [
                        'tag' => $tag->name,
                        'search-term' => request('search-term')
                    ]) }}"
                                    class="inline-flex whitespace-nowrap rounded-md border bg-slate-400 px-3 py-1 text-sm transition hover:bg-slate-500">
                                    {{ $tag->name }}
                                </a>
                @endforeach
            </div>

            <div class="flex items-center gap-2 whitespace-nowrap">
                <label for="search-term">search</label>
                <input type="text" name="search-term" id="search-term" value="{{ request('search-term') }}">
            </div>

            <button
                class="inline-flex whitespace-nowrap rounded-lg bg-cyan-600 px-5 py-2.5 text-sm font-semibold text-white transition hover:bg-cyan-700"
                type="submit">
                zoeken
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