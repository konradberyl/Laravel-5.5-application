@extends('template')

@section('content')
<div class="container">
    <div class="row">
        <div class="text-center">
            <h1> Hello Dear <span class="user-text">{{ Auth::user()->name }}</span>!</h1>
        </div>
    </div>
</div>
@endsection
