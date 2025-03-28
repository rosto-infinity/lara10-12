<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;


class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $posts = Post::paginate(2);
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

    //   $posts = Post::orderBy('created_at', 'desc')->get();
    //     dd($posts);

//     $posts = Post::limit(3)->get();
// // Retourne les 5 premiers posts

//         dd($posts);
        // $total = Post::count();
        // dd($total);
        // list($first, $second, $third) = Post::orderBy('created_at', 'desc')->take(3)->get();
        // dd($first, $second, $third);
        // dd($posts);
        $posts = Post::orderBy('created_at', 'desc')->paginate(3);

       return  view('blog.index', compact('posts'));
    }
    public function show(string $slug, string $id)
    {
        
        $post = Post::findOrFail($id);
        // dd($post);
        if ($post->slug !== $slug) {
            return  to_route('blog.show', ['slug' => $post->slug, 'id' => $post->id], 301);
        }
        return  view('blog.show', compact('post'));
   }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('blog.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
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