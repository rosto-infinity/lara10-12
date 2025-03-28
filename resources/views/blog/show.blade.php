{{-- resources/views/blog/show.blade.php --}}

@extends('layout')
@section('title', 'Page article')
@section('content')
<h1 class="text-4xl font-bold text-center mb-6">Mon blog</h1>

  <article class="border p-4 rounded-lg shadow-md mb-4">
    <h2 class="text-green-500 text-2xl font-semibold pb-2 pt-7">{{ $post->title }}</h2>
    <p class="text-gray-700 text-base pb-2">
      {{ $post->content }}</p>
    </p>
    <a href="{{ route('blog.index')}}"
      class="inline-flex items-center rounded-md border border-transparent bg-green-500 px-4 py-2 text-xs font-semibold uppercase tracking-widest text-white transition duration-150 ease-in-out hover:bg-green-700 focus:bg-green-700 focus:outline-none focus:ring-2  mt-2 focus:ring-indigo-500 focus:ring-offset-2 active:bg-green-800"
  >
      Retour
  </a>
  </article>


@endsection