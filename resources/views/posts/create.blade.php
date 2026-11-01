<x-layout title="nieuwe post">
    <div class="mx-auto max-w-2xl py-10">
        <a href="{{ route('posts.index') }}"
            class="mb-8 inline-flex items-center gap-2 text-sm font-semibold text-black transition hover:text-slate-900">
            Terug naar posts
        </a>

        <div class="overflow-hidden rounded-2xl bg-white shadow-xl ring-1 ring-slate-200">
            <div class="bg-slate-900 px-6 py-8 text-white sm:px-8">
                <p class="mb-2 text-sm font-semibold uppercase tracking-[0.2em] text-cyan-300">Nieuwe post</p>
                <h1 class="text-3xl font-bold tracking-tight">Maak een nieuwe post</h1>
            </div>

            <form action="{{ route('posts.store') }}" method="post" class="space-y-6 p-6 sm:p-8">
                @csrf

                <div>
                    <label for="title" class="mb-2 block text-sm font-semibold text-slate-700">Titel</label>
                    <input type="text" name="title" id="title" value="{{ old('title') }}"
                        class="block w-full rounded-lg border-slate-300 px-4 py-3 text-slate-900 shadow-sm focus:border-cyan-500 focus:ring-cyan-500">
                    @error('title')
                        <p class="mt-2 text-sm font-medium text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <div>
                    <label for="description" class="mb-2 block text-sm font-semibold text-slate-700">Beschrijving</label>
                    <textarea name="description" id="description" rows="7"
                        class="block w-full rounded-lg border-slate-300 px-4 py-3 text-slate-900 shadow-sm focus:border-cyan-500 focus:ring-cyan-500">{{ old('description') }}</textarea>
                    @error('description')
                        <p class="mt-2 text-sm font-medium text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <div>
                    <label for="tag_id" class="mb-2 block text-sm font-semibold text-slate-700">Categorie</label>
                    <select name="tag_id" id="tag_id"
                        class="block w-full rounded-lg border-slate-300 px-4 py-3 text-slate-900 shadow-sm focus:border-cyan-500 focus:ring-cyan-500">
                        @foreach ($tags as $tag)
                            <option value="{{ $tag->id }}" @selected(old('tag_id') == $tag->id)>
                                {{ $tag->name }}
                            </option>
                        @endforeach
                    </select>
                    @error('tag_id')
                        <p class="mt-2 text-sm font-medium text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <div class="flex justify-end border-t border-slate-200 pt-6">
                    <button type="submit"
                        class="inline-flex items-center justify-center rounded-lg bg-cyan-600 px-5 py-2.5 text-sm font-semibold text-white shadow-sm transition hover:bg-cyan-700 focus:outline-none focus:ring-2 focus:ring-cyan-500 focus:ring-offset-2">
                        Post aanmaken
                    </button>
                </div>
            </form>
        </div>
    </div>
</x-layout>