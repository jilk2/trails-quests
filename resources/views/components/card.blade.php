@props([
    'post'
])
<a href="{{ route('posts.show', $post->id) }}">
    <div {{ $attributes->merge(["class" => "card w-full max-w-xl min-w-0 rounded-xl border border-slate-200 bg-white p-6 shadow-sm transition-shadow hover:shadow-md dark:border-slate-700 dark:bg-slate-800"]) }}>
        <h2 class="break-words text-xl font-semibold text-slate-900 dark:text-white">{{ $post->title }}</h2>
        <p class="mt-3 break-words whitespace-normal text-slate-600 dark:text-slate-300">{{ $post->description }}</p>
    </div>
</a>