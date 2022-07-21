@extends('layouts.signInLayout')
@section('title', 'Sign In')
@section('contant')
    @if (!empty($message))
        <h4 class="text-primary">{{$message}}</h4>
    @endif
    @if (!empty($error_message))
        <h4 class="text-danger">{{$error_message}}</h4>
    @endif
    <h4>Hello! let's get started</h4>
    <h6 class="font-weight-light">Sign in to continue.</h6>
    <form class="pt-3" action="{{route('signInSubmitted')}}" method="post">
        {{csrf_field()}}
        <div class="form-group">
            <input class="form-control form-control-lg" name="username" placeholder="Username">
            @error('username')
                <span class="font-weight-light text-danger">{{$message}}</span>
            @enderror
        </div>
        <div class="form-group">
            <input type="password" class="form-control form-control-lg" name="password" placeholder="Password">
            @error('password')
                <span class="font-weight-light text-danger">{{$message}}</span>
            @enderror
        </div>
        <div class="mt-3">
            <button type="submit" class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn">
                SIGN IN
            </button>
        </div>
        <div class="my-2 d-flex justify-content-between align-items-center">
            <div class="form-check">
            <label class="form-check-label text-muted">
                <input type="checkbox" class="form-check-input">
                Keep me signed in
            </label>
            </div>
            <a href="#" class="auth-link text-black">Forgot password?</a>
        </div>
    </form>
@endsection