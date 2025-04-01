@extends('layout')
@section('title')
@section('content')
<div class="max-w-2xl mx-auto bg-white p-6 rounded-lg shadow-md mt-10">
    <h2 class="text-2xl font-bold text-gray-800 mb-4">Edit un nouvel article</h2>
    <form action="" method="post" class="space-y-4">
      @csrf
        
        <div>
            <label for="title" class="block text-sm font-medium text-gray-700">Titre</label>
            <input type="text" name="title" id="title"  value="{{ old('title',$post->title) }}"
            placeholder="Titre de l'article"
                   class="w-full mt-1 p-2 border border-gray-300 rounded-lg focus:ring focus:ring-green-200 focus:border-green-500">
                   
            @error('title')
                <p class="text-red-500 text-sm mt-1">
                  {{-- Le champ titre est obligatoire. --}}
                  {{ $message }}
                </p>
            @enderror
        </div>
        <div>
            <label for="slug" class="block text-sm font-medium text-gray-700">Slug</label>
            <input type="text" name="slug" id="slug" value="{{ old('slug',$post->slug) }}"
            placeholder="Slug de l'article"
                   class="w-full mt-1 p-2 border border-gray-300 rounded-lg focus:ring focus:ring-green-200 focus:border-green-500">
            @error('slug')
                <p class="text-red-500 text-sm mt-1">
                  {{-- Le champ slug est obligatoire. --}}
                  {{ $message }}
                </p>
            @enderror
       
        <div>
            <label for="content" class="block text-sm font-medium text-gray-700">Contenu</label>
            <textarea name="content" id="content" rows="5" 
            value=""
            placeholder="Écrivez votre article ici..."
                      class="w-full mt-1 p-2 border border-gray-300 rounded-lg focus:ring focus:ring-green-200 focus:border-green-500">{{ old('content', $post->content) }}</textarea>
            @error('content')
                <p class="text-red-500 text-sm mt-1">
                  {{-- Le champ contenu est obligatoire. --}}
                  {{ $message }}
                </p>
            @enderror
        </div>
        <button type="submit" 
                class="w-full bg-green-500 text-white p-2 rounded-lg hover:bg-green-600 transition">Enregistrer</button>
    </form>
</div>
@endsection
