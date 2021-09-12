@extends('dashboard')
@section('content_bo')
<table class="table-auto w-100 text-center">
    <thead>
        <tr class='bg-purple-600 bg-opacity-100'>
            <th class='w-1/4 h-1/2'>#</th>
            <th class='w-1/2'>Name</th>
            <th class='w-1/4'>Email</th>
            <th class='w-1/4'>Role id</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($users as $user)
            <tr class='bg-purple-600 bg-opacity-50 h-14 '>
                <td>{{$user->id}}</td>
                <td class='m-5 '>{{$user->name}}</td>
                <td>{{$user->email}}</td>
                <td>{{$user->role_id}}</td>
            </tr>
        @endforeach
    </tbody>
</table>
@endsection