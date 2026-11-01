<x-layout title="Admin">
    <div class="mx-auto max-w-6xl py-10">
        <div class="mb-8 border-b border-black/20 pb-6">
            <h1 class="text-3xl font-bold tracking-tight text-slate-900">Admin posts</h1>
            <p class="mt-2 text-black">Beheer alle posts vanuit dit overzicht.</p>
        </div>

        <div class="overflow-hidden rounded-xl bg-white shadow-lg ring-1 ring-slate-200">
            <div class="overflow-x-auto">
                <table class="w-full text-left text-sm text-slate-700">
                    <thead class="bg-slate-900 text-xs uppercase tracking-wide text-white">
                        <tr>
                            <th class="px-6 py-4">ID</th>
                            <th class="px-6 py-4">Titel</th>
                            <th class="px-6 py-4">Eigenaar</th>
                            <th class="px-6 py-4">Tag</th>
                            <th class="px-6 py-4">Status</th>
                            <th class="px-6 py-4 text-right">Acties</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-slate-200">
                        @forelse ($posts as $post)
                            <tr class="transition hover:bg-slate-50">
                                <td class="whitespace-nowrap px-6 py-4 font-semibold">{{ $post->id }}</td>
                                <td class="px-6 py-4 font-semibold text-slate-900">{{ $post->title }}</td>
                                <td class="px-6 py-4">{{ $post->user->name }}</td>
                                <td class="px-6 py-4">{{ $post->tag->name }}</td>
                                <td class="px-6 py-4">{{ $post->active ? 'Actief' : 'Niet actief' }}</td>
                                <td class="px-6 py-4">
                                    <div class="flex justify-end gap-2">
                                        <form action="{{ route('admin.update', $post) }}" method="post">
                                            @csrf
                                            <button type="submit" name="active" class="rounded-md bg-cyan-600 px-3 py-1.5 text-xs font-semibold text-white transition hover:bg-cyan-700">
                                                @if ($post->active == 1)
                                                    Actief
                                                @else
                                                    Niet actief
                                                @endif
                                            </button>
                                        </form>

                                        <form action="{{ route('admin.destroy', $post) }}" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit"
                                                class="rounded-md bg-red-600 px-3 py-1.5 text-xs font-semibold text-white transition hover:bg-red-700">
                                                Delete
                                            </button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="6" class="px-6 py-8 text-center text-slate-500">Er zijn geen posts gevonden.
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
        <div class="mt-8">
        {{ $posts->links() }}
    </div>
</x-layout>