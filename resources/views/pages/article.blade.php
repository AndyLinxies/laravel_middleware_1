@extends('layouts.index')
@section('content')
    <h1 class='text-center mt-3 text-xl'>Bienvenu sur la page article</h1>
    @foreach ($articles as $article)
    <div class="w-full mt-5 max-w-sm px-4 py-3 mx-auto bg-white rounded-md shadow-md dark:bg-gray-800">
        <h5><a href="/articles/{{$article->id}}">{{$article->titre}}</a></h5>
            
    </div>
    @endforeach

@endsection