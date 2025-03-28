@extends('layout')
@section('title', 'Créer article')
@section('content')
<div class="max-w-2xl mx-auto bg-white p-6 rounded-lg shadow-md mt-10">
    <h2 class="text-2xl font-bold text-gray-800 mb-4">Créer un nouvel article</h2>
    <form action="" method="post" class="space-y-4">
      @csrf
        
        <div>
            <label for="title" class="block text-sm font-medium text-gray-700">Titre</label>
            <input type="text" name="title" id="title" value="Article de démonstration" 
                   class="w-full mt-1 p-2 border border-gray-300 rounded-lg focus:ring focus:ring-green-200 focus:border-green-500">
        </div>
        <div>
            <label for="content" class="block text-sm font-medium text-gray-700">Contenu</label>
            <textarea name="content" id="content" rows="5" 
                      class="w-full mt-1 p-2 border border-gray-300 rounded-lg focus:ring focus:ring-green-200 focus:border-green-500">Contenu de démonstration</textarea>
        </div>
        <button type="submit" 
                class="w-full bg-green-500 text-white p-2 rounded-lg hover:bg-green-600 transition">Enregistrer</button>
    </form>
</div>
@endsection
