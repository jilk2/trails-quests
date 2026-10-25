<x-layout>
    {{ $post->id }}
    @foreach ($post->comments as $comment)
    <br>
    {{ $comment->comment }}
        
    @endforeach
</x-layout>
