@props([
    'posts'
]);

<div {{ $attributes->merge(["class" => "card"]) }}>
    @forelse ($posts as $post)
    <ul>
    
    <li> - {{ $post->title }}</li>    
        
    </ul>    
    @empty
        <p>Er zijn geen posts gevonden</p>
    @endforelse
</div>