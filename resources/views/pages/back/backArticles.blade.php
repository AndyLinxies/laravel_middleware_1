@extends('dashboard')
@section('content_bo')
<table class="table-auto w-100 text-center">
    <thead>
        <tr class='bg-purple-600 bg-opacity-100'>
            <th class='w-1/4 h-1/2'>#</th>
            <th class='w-1/2'>Titre</th>
            <th class='w-1/4'>Texte</th>
            <th class='w-1/4'>User id</th>
            <th class='w-1/4'></th>
            <th class='w-1/4'></th>
            <th class='w-1/4'></th>
        </tr>
    </thead>
    <tbody>
        @foreach ($articles as $article)
            <tr class='bg-purple-600 bg-opacity-50 h-14 '>
                <td>{{$article->id}}</td>
                <td class='m-5 '>{{$article->titre}}</td>
                <td>{{$article->texte}}</td>
                <td>{{$article->user_id}}</td>
                <td>
                    <a href="/dashboard/articles/{{$article->id}}/edit" class="px-4 py-2  font-medium tracking-wide text-white capitalize transition-colors duration-200 transform bg-green-600 rounded-md dark:bg-gray-800 hover:bg-green-500 dark:hover:bg-gray-700 focus:outline-none focus:bg-blue-500 dark:focus:bg-gray-700">Edit</a>
                </td>
                <td class="mt-1"> 
                    <form action="/dashboard/articles/{{$article->id}}" method='post'>
                        @csrf
                        @method('delete')
                        <button type='submit' class="px-4 py-2 mr-0  font-medium tracking-wide text-white capitalize transition-colors duration-200 transform bg-red-600 rounded-md dark:bg-gray-800 hover:bg-green-500 dark:hover:bg-gray-700 focus:outline-none focus:bg-blue-500 dark:focus:bg-gray-700">Delete</button>
                    </form>
                </td>
                <td>
                    <a href="/dashboard/articles/{{$article->id}}" class="px-4 py-2 mt-3 font-medium tracking-wide text-white capitalize transition-colors duration-200 transform bg-pink-500 rounded-md dark:bg-gray-800 hover:bg-green-500 dark:hover:bg-gray-700 focus:outline-none focus:bg-blue-500 dark:focus:bg-gray-700">Show</a>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
<a href="/dashboard/articles/create" class="px-4 py-2 mt-8  font-medium tracking-wide text-white capitalize transition-colors duration-200 transform bg-gray-600 rounded-md dark:bg-gray-800 hover:bg-blue-500 dark:hover:bg-gray-700 focus:outline-none focus:bg-blue-500 dark:focus:bg-gray-700">Créer un article</a>

@endsection