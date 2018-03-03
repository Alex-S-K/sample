@extends('layouts.default')

@section('title', 'Home')

@section('content')
    <div class="jumbotron">
        <h1>Hello, world!</h1>
        <p class="lead">Everything, Well be start here</p>
        <p>
            <a href="{{ route('signup') }}" role="button" class="btn btn-success btn-lg">Sign up</a>
        </p>
    </div>
@endsection
