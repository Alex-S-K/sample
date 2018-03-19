@extends('layouts.default')

@section('title', 'Sign up')

@section('content')

    <div class="col-md-8 col-md-offset-2">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">Sign up</h3>
            </div>
            <div class="panel-body">
                @include('shared._errors')

                <form action="{{ route('users.store') }}" method="post">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" id="" placeholder="Please input your name..." name="name" value="{{ old('name') }}">
                    </div>

                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="text" class="form-control" id="" placeholder="Please input your email..." name="email" value="{{ old('email') }}">
                    </div>

                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" id="" placeholder="Please input your password..." name="password" value="{{ old('password') }}">
                    </div>

                    <div class="form-group">
                        <label for="password_confirmation">Password-confirmation</label>
                        <input type="password" class="form-control" id="" placeholder="Please confirm your password..." name="password_confirmation" value="{{ old('password_confirmation') }}">
                    </div>

                    <button type="submit" class="btn btn-primary">
                        Sign up!
                    </button>
                </form>
            </div>
        </div>
    </div>

@endsection
