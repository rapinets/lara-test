<?php

namespace App\Http\Controllers\Blog;

use App\Models\Post;

use App\Http\Controllers\Controller;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::all();
        return view('blog.posts', compact('posts'));
    }
    /**
     * Display the specified resource.
     *
     * @param Post $post
     * @return void
     */
    public function show(Post $post)
    {
        return view('blog.show', compact("post"));
    }
}
