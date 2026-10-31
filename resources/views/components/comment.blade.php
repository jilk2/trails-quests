@props([
    'comment'
])

<div class="card mb-4 w-full rounded-xl bg-slate-200 p-4 text-center">
    <p class="m-0 break-words leading-7 text-black">
        {{ $comment->user->name }}: {{ $comment->comment }}
    </p>
</div>