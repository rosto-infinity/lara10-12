<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = Post::all();
        // $posts = Post::findOrFail(20);
        // $posts = Post::where('title', 'published')->get();
        // $post = Post::where('title', 'Mon article')->first();
        // $post = Post::where('title', 'Mon article')->firstOrFail();
        // dd($post);
        // dd($posts);
        // $titles = Post::pluck('title');
        // dd($titles);

        // $posts = Post::select('id', 'title')->get();
        // dd($posts);

      $posts = Post::orderBy('created_at', 'desc')->get();
        dd($posts);

       return $posts;
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
