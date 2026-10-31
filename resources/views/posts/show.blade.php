<x-layout title="post">
    <div class="mx-auto max-w-3xl py-10">
        <a href="{{ route('posts.index') }}"
            class="mb-8 inline-flex items-center gap-2 text-sm font-semibold text-black">
            Terug naar posts
        </a>

        <x-post :post="$post" />

        <div class="mb-6 flex items-center justify-between border-b border-black/20 pb-4">
            <h2 class="text-2xl font-bold text-slate-900">Comments</h2>

        </div>

        @auth
            <a href="{{ route('comments.create', ['post_id' => $post->id]) }}"
                class="mb-8 inline-flex rounded-lg bg-cyan-600 px-5 py-2.5 text-sm font-semibold text-white transition hover:bg-cyan-700">
                Plaats een comment
            </a>
        @else
            <p class="mb-8 rounded-lg bg-slate-100 p-4 text-sm text-black">
                Om een comment te plaatsen moet je ingelogd zijn.
            </p>
        @endauth

        <div class="space-y-4">
            @forelse ($post->comments as $comment)
                <x-comment :comment="$comment" />
            @empty
                <p class="rounded-lg bg-slate-100 p-4 text-slate-600">
                    Wees de eerste die een comment plaatst.
                </p>
            @endforelse
        </div>

        @auth
            @if (Auth::user()->id === $post->user_id)
                <form action="{{ route('posts.destroy', $post) }}" method="post" class="mt-8 flex justify-end">
                    @csrf
                    @method('DELETE')
                    <button type="submit"
                        class="rounded-lg bg-red-600 px-4 py-2 text-sm font-semibold text-white transition hover:bg-red-700">
                        Post verwijderen
                    </button>
                </form>
            @endif
        @endauth
    </div>
</x-layout>