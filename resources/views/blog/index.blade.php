{{-- resources/views/blog/index.blade.php --}}
@extends('layout')
@section('title', 'Accueil Blog-Prof---')
@section('content')

<div  class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
  <div class="col-span-1 md:col-span-2 lg:col-span-3 mb-4">
    <h1 class="text-4xl font-bold text-center mb-6">Mon blog</h1>
  </div>
  <div class="col-span-1 md:col-span-2 lg:col-span-3 mb-4">
    <p class="text-gray-700 text-base text-center">Bienvenue sur mon blog ! Ici, je partage mes réflexions, mes découvertes et mes passions. N'hésitez pas à explorer les articles ci-dessous.</p>
  </div>
@foreach ($posts as $post)

  <article class="border p-4 rounded-lg shadow-md mb-4">
    <h2 class="text-green-500 text-2xl font-semibold pb-2 pt-7">{{ $post->title }}</h2>
    <p class="text-gray-700 text-base pb-2">{{ $post->content }}</p>
    <b class="text-gray-600">Créé le :</b> <i class="text-gray-500">{{ $post->created_at->format('d M Y') }}</i>
    <p>
      <a href="{{ route('blog.show',['slug'=>$post->slug, 'post'=> $post->id]) }}"
      class="inline-flex items-center rounded-md border border-transparent bg-green-500 px-4 py-2 text-xs font-semibold uppercase tracking-widest text-white transition duration-150 ease-in-out hover:bg-green-700 focus:bg-green-700 focus:outline-none focus:ring-2  mt-2 focus:ring-indigo-500 focus:ring-offset-2 active:bg-green-800"
  >
      Lire la suite
  </a>
      <a href="{{ route('blog.edit',['slug'=>$post->slug, 'post'=> $post->id]) }}"
      class="inline-flex items-center rounded-md border border-transparent bg-green-500 px-4 py-2 text-xs font-semibold uppercase tracking-widest text-white transition duration-150 ease-in-out hover:bg-green-700 focus:bg-green-700 focus:outline-none focus:ring-2  mt-2 focus:ring-indigo-500 focus:ring-offset-2 active:bg-green-800"
  >
      Edité
  </a>
    </p>
  </article>
  @endforeach
</div>
<div class="text-green-500 pt-7">
  {{ $posts->links() }}
</div>
@endsection
