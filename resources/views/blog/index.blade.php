@extends('layout')
@section('title', 'Accueil Blog-Prof---')
@section('content')
<h1 class="text-4xl font-bold text-center mb-6">Mon blog</h1>
@foreach ($posts as $post)
  <article class="border p-4 rounded-lg shadow-md mb-4">
    <h2 class="text-green-500 text-2xl font-semibold pb-2 pt-7">{{ $post->title }}</h2>
    <p class="text-gray-700 text-base pb-2">{{ $post->content }}</p>
    <b class="text-gray-600">Créé le :</b> <i class="text-gray-500">{{ $post->created_at->format('d M Y') }}</i>
  </article>
@endforeach
<div class="text-green-500 pt-7">
  {{ $posts->links() }}
</div>
@endsection
