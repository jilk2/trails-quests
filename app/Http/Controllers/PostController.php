<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Tag;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $posts = Post::where('active', 1)
            ->withCount('comments')
            ->when($request->input('search-term'), function ($query, $search) {
                $query->where(function ($query) use ($search) {
                    $query->where('title', 'like', "%{$search}%")
                        ->orWhere('description', 'like', "%{$search}%");
                });
            })->when($request->input('tag'), function ($query, $tag) {
                $query->whereHas('tag', function ($query) use ($tag) {
                    $query->where('tags.name', $tag);
                });
            })->paginate(9);

        return view('posts.index', ['data' => $posts, 'tags' => Tag::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $this->authorize('create', Post::class);
        return view('posts.create', ["tags" => Tag::all()]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $this->authorize('create', Post::class);

        $request->validate([
            "title" => "required|min:5",
            "description" => 'required',
            "tag_id" => "required|exists:tags,id",
        ]);

        $post = Post::create([  
            "user_id" => $request->user()->id,
            "tag_id" => $request->input("tag_id"),
            "title" => $request->input("title"),
            "description" => $request->input("description"),
        ]);

        return redirect()->route("posts.show", $post);
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        return view("posts.show", compact("post"));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        $this->authorize('update', $post);
        return view('posts.edit', ['post' => $post,'tags' => Tag::all(),]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Post $post)
    {
        $this->authorize('update', $post);

        $validate = $request->validate([
            'title' => 'required|min:5',
            'description' => 'required',
            'tag_id' => 'required|exists:tags,id',
        ]);

        $post->update($validate);

        return redirect()->route('posts.show', $post);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        $this->authorize('delete', $post);
        $post->delete();
        return redirect()->route('posts.index');
    }
}
