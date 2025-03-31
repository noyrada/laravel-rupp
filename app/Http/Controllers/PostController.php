<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    // Display a listing of posts
    public function index() 
    { 
        $posts = Post::all(); 
        return view('posts.index', compact('posts')); 
    } 

    // Show the form for creating a new post
    public function create() 
    { 
        return view('posts.create'); 
    } 

    // Store a newly created post in the database 
    public function store(Request $request) 
    { 
        $request->validate([ 
            'title' => 'required|max:255', 
            'content' => 'required', 
            ]); 
            Post::create([ 
            'title' => $request->title, 
            'content' => $request->content, 
            ]); 
            return redirect()->route('posts.index'); 
    }

    // Show the form for editing the specified post
    public function edit(Post $post) 
    { 
        return view('posts.edit', compact('post'));
    } 

    // Update the specified post in the database
    public function update(Request $request, Post $post) 
    { 
        $request->validate([ 
        'title' => 'required|max:255', 
        'content' => 'required', 
        ]); 
        $post->update([ 
        'title' => $request->title, 
        'content' => $request->content, 
        ]); 

        return redirect()->route('posts.index'); 
    } 

    // Remove the specified post from the database
    public function destroy(Post $post) 
    { 
        $post->delete(); 
        return redirect()->route('posts.index');
    }

}