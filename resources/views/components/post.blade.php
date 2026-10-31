@props([
    'post'
])

    <div {{ $attributes->merge(["class" => "card flex h-40 w-full max-w-xl min-w-0 flex-col overflow-hidden rounded-xl border border-slate-200 bg-white p-6 shadow-sm transition-shadow hover:shadow-md dark:border-slate-700 dark:bg-slate-800"]) }}>
        <h2 class="break-words text-xl font-semibold text-white">{{ $post->title }}</h2>
        <p class="text-ml font-semibold text-white">{{ $post->description }}</p>
    </div>