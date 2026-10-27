<x-layout title="nieuwe post">
    <h1>Create new post</h1>
    <form action="{{ route("posts.store") }}" method="post">
        @csrf
        <div>
            <label for="title">Title</label>
            <input type="text" name="title" id="title">
            @error("title")
                <span> {{ $message }}</span>
            @enderror

        </div>

        <div>
            <label for="description">Description</label>
            <textarea name="description" id="description">{{ old('description') }}</textarea>
            @error("description")
                <span> {{ $message }}</span>
            @enderror
        </div>

        <div>
            <label for="tags">Tags</label>
            <select name="tags[]" id="tags" multiple>
                @foreach ($tags as $tag)
                    <option value="{{ $tag->id }}">{{ $tag->name }}</option>
                @endforeach
            </select>
        </div>

        <button type="submit" name="submit">Save</button>
    </form>
</x-layout>