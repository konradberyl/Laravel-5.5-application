@extends('template')

@section('title')
@if (isset($title))
{{$title}}
@endif
@endsection('title')

@section('content')
<div class="text-center section-header">
    <h1 class="text-center">User list</h1>
    <a href="{{ route('user.insertNew') }}">add  static user</a>
</div>

<table class="table">
    <thead>
        <tr>
            <th scope="col">Id</th>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">Age</th>
            <th scope="col">Profession</th>
            <th scope="col">Town</th>
            <th scope="col">Role</th>

        </tr>
    </thead>
    <tbody>
        @foreach ($users as $user)
        <tr>
            <td>{{ $user->id }}</td>
            <td>{{ $user->name }}</td>
            <td>{{ $user->email }}</td>
            <td>{{ $user->age }}</td>
            <td>{{ $user->profession }}</td>
            <td>{{ $user->town }}</td>
            <td>@if($user->accessType === 2)
                <span class="role-admin-text">admin</span>
                @elseif($user->accessType === 1)
                <span class="role-moderator-text">moderator</span>
                @else
                <span class="role-user-text">user</span>
                @endif
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

@endsection('content')