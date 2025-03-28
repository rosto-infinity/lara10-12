{{-- resources/views/blog/show.blade.php --}}

@extends('layout')
@section('title', 'Créer article')
@section('content')
  <form action="" method="post">
    <input type='text' name='title' value='Article de demonstration'>
    <textarea name='content' > Contenu de demonstration' </textarea> 
    <button>Enregistrer</button>

  </form>
 

@endsection