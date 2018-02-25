@extends('template')

@section('title')
@if (isset($title))
{{$title}}
@endif
@endsection('title')

@section('content')
<div class="text-center section-header">
    @if(Auth::check())
    <h1 class="text-center">Hellow  <span class="user-text">{{ Auth::user()->name }}!</span></h1>
    @else
    <h1 class="text-center">Hellow guest! </h1>
    @endif
    <h2>Welcome on the Laravel 5.5 web application.</h2>

    <h3>@if(Auth::check())
        Now you can use application.
        @else
        You do not have access to application. Please login.
        @endif
    </h3>
</div>
    <div class="text-center section-header" style="margin-top:20px;">
        <h1>Access type:</h1>
        @if(Auth::check())
        <h2>@if(Auth::user()->accessType === 2)
            <span class="role-admin-text">admin</span>
            @elseif(Auth::user()->accessType === 1)
            <span class="role-moderator-text">moderator</span>
            @else
            <span class="role-user-text">user</span>
            @endif
        </h2>
        @else
        <h2><span>no access</span></h2>
        @endif
    </div>

@endsection('content')