<x-layout title="post">
    {{ $post->id }}
    {{ $post->title }}
    @foreach ($post->comments as $comment)
    <br>
    {{ $comment->comment }}
        
    @endforeach


    <form action="{{ route('posts.destroy', $post) }}" method="post">
        @csrf
        @method('DELETE')
        <button type="submit">delete post</button>
    </form>
</x-layout>
