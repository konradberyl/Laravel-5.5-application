@extends('template')

@section('title')
@if (isset($title))
{{$title}}
@endif
@endsection('title')

@section('content')
<div class="text-center section-header">
    <h1 class="text-center">details of user <span class="user-text">{{ $user->name." ".$user->surname}}</span></h1>
</div>
<div class="basic-content">
    <div class="container">
        <form>
            <div class="form-group row">
                <label for="profession" class="col-sm-2 col-form-label">Profession</label>
                <div class="col-sm-10">
                    <input type="text"  class="form-control" id="profession" value="{{ $details->profession}}">
                </div>
            </div>
            <div class="form-group row">
                <label for="age" class="col-sm-2 col-form-label">Age</label>
                <div class="col-sm-10">
                    <input type="text"  class="form-control" id="age" value="{{ $details->age}}">
                </div>
            </div>
            <div class="form-group row">
                <label for="town" class="col-sm-2 col-form-label">Town</label>
                <div class="col-sm-10">
                    <input type="text"  class="form-control" id="town" value="{{ $details->town}}">
                </div>
            </div>
        </form>
    </div>
</div>


@endsection('content')