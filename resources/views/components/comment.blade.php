@props([
    'comment'
])

<div {{ $attributes->merge(['class' => 'card mb-10  w-full rounded-xl bg-slate-200 text-center']) }}>
    <p class="mt-4 whitespace-pre-line break-words leading-7 text-black">
       {{ $comment->user->name }}: {{ $comment->comment }}
    </p>
</div>