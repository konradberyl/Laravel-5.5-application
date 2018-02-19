@extends('template')

@section('title')
@if (isset($title))
{{$title}}
@endif
@endsection('title')

@section('content')
<div class="text-center section-header">
    <h1 class="text-center">User list</h1>
    <a href="{{ route('userAdd') }}">add  static user</a>
</div>

<table class="table">
    <thead>
        <tr>
            <th scope="col">Id</th>
            <th scope="col">Name</th>
            <th scope="col">Surname</th>
            <th scope="col">Email</th>
            <th scope="col">Type of permission</th>
            <th scope="col">Details</th>

        </tr>
    </thead>
    <tbody>
        @foreach ($users as $user)
        <tr>

            <td>{{ $user->id }}</td>
            <td>{{ $user->name }}</td>
            <td>{{ $user->surname }}</td>
            <td>{{ $user->email }}</td>
            <td>{{ $user->type }}</td>
            <td><a  class="btn btn-warning" href="{{ URL::to('/users/details/'. $user->id) }}">show details</a></td>
        </tr>
        @endforeach
    </tbody>
</table>

@endsection('content')