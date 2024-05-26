<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Http\Requests\StorePostRequest;
use App\Http\Requests\UpdatePostRequest;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = Post::where('user_id', Auth::user()->id)->get();
        return view('resources.post.index', ['posts' => $posts]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('resources.post.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePostRequest $request)
    {
        Post::create([
            'user_id' => Auth::user()->id,
            'subject' => $request->subject,
            'post' => $request->post,
            'status' => ($request->status == "on" ? 1 : 0)
        ]);
        return redirect()->route('post.index')->with('message', 'Post Successfully Saved!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        return view('resources.post.show', ['post' => $post]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        return view('resources.post.edit', ['post' => $post]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePostRequest $request, Post $post)
    {
        $post->update([
            'user_id' => Auth::user()->id,
            'subject' => $request->subject,
            'post' => $request->post,
            'status' => ($request->status == "on" ? 1 : 0)
        ]);
        return redirect()->route('post.index')->with('message', 'Post Successfully Updated!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        $post->delete();
        return redirect()->route('post.index')->with('message', 'Post Successfully Deleted!');
    }

    /**
     * Display the dashboard with post counts.
     */
    public function dashboard()
    {
        $userId = Auth::user()->id;

        $totalPosts = Post::where('user_id', $userId)->count();
        $publishedPosts = Post::where('user_id', $userId)->where('status', 1)->count();
        $unpublishedPosts = Post::where('user_id', $userId)->where('status', 0)->count();

        return view('dashboard', [
            'totalPosts' => $totalPosts,
            'publishedPosts' => $publishedPosts,
            'unpublishedPosts' => $unpublishedPosts
        ]);
    }
}
