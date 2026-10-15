@props([
    'posts'
]);

<div {{ $attributes->merge(["class" => "card"]) }}>
    {{ $posts }}
</div>