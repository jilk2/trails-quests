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

    <div class="">
        <form class="flex gap-4 mb-5" action="{{ route('posts.index') }}" method="get">
            <div class="flex gap-2">
                <span class="mb-2 block">tags</span>
                <div class="flex flex-wrap gap-2">
                    @foreach ($tags as $tag)
                        <a href="{{ route('posts.index', ['tags' => [$tag->name], 'search-term' => request('search-term')]) }}"
                            class="rounded-md border px-3 py-1 text-sm transition hover:bg-slate-100 {{ in_array($tag->name, request('tags', [])) ? 'border-slate-900 bg-slate-900 text-white' : 'border-slate-300 text-slate-700' }}">
                            {{ $tag->name }}
                        </a>
                    @endforeach
                </div>
            </div>
            <div>
                <label for="search-term">search</label>
                <input type="text" name="search-term" id="search-term" value="{{ request('search-term') }}">
            </div>
            <button type="submit">zoeken</button>
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