<?php

namespace App\Http\Controllers\Admin\Blog;

use App\Models\Post;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Validation\Rule;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::all();
        return view('admin.blog.post.index', compact('posts'));
    }

    public function create()
    {
        return view('admin.blog.post.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required | min:3',
            'slug' => 'required | min:3 | unique:posts',
            'img' => 'required',
            'small_text' => 'required',
            'content' => 'required'
        ]);

        Post::create($validatedData);

        return redirect()->route('admin.post.index');
    }

    public function edit(Post $post)
    {
        return view('admin.blog.post.edit', compact("post"));
    }

    public function update(Request $request, Post $post)
    {
        $validatedData = $request->validate([
            'title' => 'required | min:3 ',
//            'slug' => 'required | min:3 | unique:posts',
            'slug' => [
                'required',
                'min:3',
                Rule::unique('posts')->ignore($post->id, 'id'),
            ],
            'img' => 'required',
            'small_text' => 'required',
            'content' => 'required'
        ]);

        $post->update($validatedData);

        return redirect()->route('admin.post.index');
    }

    public function destroy(Post $post)
    {
        $post->delete();
        return redirect()->route('admin.post.index');
    }
}
