<?php
namespace App\Http\Controllers;

use App\Http\Requests\FormPostRequest;
use App\Models\Post;

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
//view
        return view('blog.index', compact('posts'));

    }
    // public function show(string $slug, string $id)
    public function show(string $slug, string $id)
    {

        $post = Post::findOrFail($id);

        // dd($post);

        if ($post->slug !== $slug) {
            return to_route('blog.show', ['slug' => $post->slug, 'id' => $post->id]);
        }
        return view('blog.show', compact('post'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // dd(session()->all());
        $post = new Post();

        return view('blog.create', [
            'post' => $post,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(FormPostRequest $request)
    {
        $post = Post::create($request->validated());

        // Utilisation de $post pour récupérer slug et id
        return redirect()->route('blog.show', ['slug' => $post->slug, 'post' => $post->id])
            ->with('success', 'Article créé avec succès');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        return view('blog.edit', [
            'post' => $post,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(FormPostRequest $request, Post $post)
    {
        
        $post->update($request->validated());
        return redirect()->route('blog.show', ['slug' => $post->slug, 'post' => $post->id])
            ->with('success', 'Article  a bien été sauvegarder');
        // dd($request->validated());
        // dd($post);
        // dd($request->all());
        // dd($request->input('slug'));
        // dd($request->input('title'));
        // dd($request->input('content'));
        // dd($post->id);
        // dd($post->slug);

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
