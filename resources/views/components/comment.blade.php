@props([
    'comment'
])

<div class="card mb-4 w-full rounded-xl bg-slate-200 p-4 text-center">
    <p class="m-0 break-words leading-7 text-black">
        {{ $comment->user->name }}: {{ $comment->comment }}
    </p>

    @auth
        @if (Auth::user()->id === $comment->user_id)
            <div class="mt-4 flex justify-end gap-2">
                <a href="{{ route('comments.edit', $comment) }}"
                    class="inline-flex rounded-md bg-cyan-600 px-3 py-1.5 text-xs font-semibold text-white transition hover:bg-cyan-700">
                    Bewerken
                </a>

                <form action="{{ route('comments.destroy', $comment) }}" method="post" class="m-0">
                    @csrf
                    @method('DELETE')
                    <button type="submit"
                        class="inline-flex rounded-md bg-red-600 px-3 py-1.5 text-xs font-semibold text-white transition hover:bg-red-700">
                        Verwijderen
                    </button>
                </form>
            </div>
        @endif
    @endauth
</div>