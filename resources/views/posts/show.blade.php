<x-layout>
    {{ $post->id }}
    {{ $post->title }}
    @foreach ($post->comments as $comment)
    <br>
    {{ $comment->comment }}
        
    @endforeach
</x-layout>
