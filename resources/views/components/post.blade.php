@props([
    'post'
])

<div {{ $attributes->merge(['class' => 'card mb-10 mx-auto min-h-96 w-full overflow-hidden rounded-xl bg-[#1F2937] p-8 text-white shadow-lg text-center']) }}>
    <h2 class="break-words text-2xl font-bold tracking-tight">
        {{ $post->title }}
    </h2>
    <p class="mt-4 whitespace-pre-line break-words leading-7 text-slate-200">
        {{ $post->description }}
    </p>
</div>