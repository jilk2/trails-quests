@props([
    'post'
])
<a href="{{ route('posts.show', $post->id) }}" class="block h-full">
    <div {{ $attributes->merge(["class" => "card flex h-40 w-full max-w-xl min-w-0 flex-col overflow-hidden rounded-xl border border-slate-200 bg-white p-6 shadow-sm transition-shadow hover:shadow-md dark:border-slate-700 dark:bg-slate-800"]) }}>
        <h2 class="break-words text-xl font-semibold text-white">{{ $post->title }}</h2>
        <h3 class="break-words text-ml font-semibold text-white">post created by: {{ $post->user->name }}</h3>
        <p class="text-ml font-semibold text-white">Comments: {{ $post->comments_count }}</p>
    </div>
</a>