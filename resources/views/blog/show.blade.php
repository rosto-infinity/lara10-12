@extends('layout')
@section('title', 'Page article')
@section('content')
<h1 class="text-4xl font-bold text-center mb-6">Mon blog</h1>

  <article class="border p-4 rounded-lg shadow-md mb-4">
    <h2 class="text-green-500 text-2xl font-semibold pb-2 pt-7">{{ $post->title }}</h2>
    <p class="text-gray-700 text-base pb-2">{{ $post->content }}</p>
   
    
    </p>
  </article>


@endsection