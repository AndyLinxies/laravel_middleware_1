@extends('dashboard')
@section('content_bo')
<div class="container">

    <div class="max-w-xs mx-auto overflow-hidden bg-white rounded-lg shadow-lg dark:bg-gray-800">
        <img class="object-cover w-full h-56" src="{{asset('img/article.jpeg')}}" alt="article">
        
        <div class="py-5 text-center">
            <p class="block text-2xl font-bold text-gray-800 dark:text-white">Titre: {{$article->titre}}</p>
            <span class="text-sm text-gray-700 dark:text-gray-200">Description: {{$article->texte}}</span>
        </div>
    </div>
</div>
@endsection