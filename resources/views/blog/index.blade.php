@extends('layout')
  @section('title', 'Accueil Blog-Prof---')
@section('content')
<h1 class="text-4xl font-bold">Mon blog</h1>
{{-- {{ dump($posts) }} --}}
  @foreach ($posts as $post)
    <article>
      <h2 class="text-green-500 pb-2 pt-7"> {{ $post->title }} </h2>
      <p class="text-gray-500 pb-2">
        {{ $post->content }}
      </p>
      <b>Créer le</b> <i>{{ $post->created_at }}</i>
    </article> 
  @endforeach
  <div class="text-green-500 pt-7"> 
  {{ $posts->links() }}
 </div>
@endsection