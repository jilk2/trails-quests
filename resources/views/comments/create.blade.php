    <x-layout title="nieuwe comment">
    <div class="mx-auto max-w-2xl py-10">
        <a href="{{ route('posts.show', $post) }}"
            class="mb-8 inline-flex items-center gap-2 text-sm font-semibold text-slate-600 transition hover:text-slate-900">
            &larr;
            Terug naar posts
        </a>

        <div class="overflow-hidden rounded-2xl bg-white shadow-xl ring-1 ring-slate-200">
            <div class="bg-slate-900 px-6 py-8 text-white sm:px-8">
                <p class="mb-2 text-sm font-semibold uppercase tracking-[0.2em] text-cyan-300">Nieuwe comment</p>
                <h1 class="text-3xl font-bold tracking-tight">Comment bij {{ $post->title }}</h1>
            </div>

            <form action="{{ route('comments.store') }}" method="post" class="space-y-6 p-6 sm:p-8">
                @csrf

                <div>
                    <input type="hidden" name="post_id" value="{{ $post->id }}">
                    <label for="comment" class="mb-2 block text-sm font-semibold text-slate-700">Comment</label>
                    <textarea name="comment" id="comment" rows="7"
                        class="block w-full rounded-lg border-slate-300 px-4 py-3 text-slate-900 shadow-sm focus:border-cyan-500 focus:ring-cyan-500">{{ old('comment') }}</textarea>
                    @error('comment')
                        <p class="mt-2 text-sm font-medium text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <div class="flex justify-end border-t border-slate-200 pt-6">
                    <button type="submit"
                        class="inline-flex items-center justify-center rounded-lg bg-cyan-600 px-5 py-2.5 text-sm font-semibold text-white shadow-sm transition hover:bg-cyan-700 focus:outline-none focus:ring-2 focus:ring-cyan-500 focus:ring-offset-2">
                        Comment plaatsen
                    </button>
                </div>
            </form>
        </div>
    </div>
</x-layout>