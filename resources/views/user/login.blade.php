@extends('user.layout.index')
@section('title', 'Login')
@section('content')
    <h4 class="text-center mb-4 text-white">Sign in your account</h4>
    <form action="" method="post" novalidate>
        @csrf
        <div class="form-group">
            <label class="mb-1 text-white"><strong>Email</strong></label>
            <input type="email" class="form-control" name="email">
            @error('email')
            <p style="color: red">{{$message}}</p>
            @enderror
        </div>

        <div class="form-group">
            <label class="mb-1 text-white"><strong>Password</strong></label>
            <input type="password" class="form-control" name="password">
            @error('password')
            <p style="color: red">{{$message}}</p>
            @enderror
        </div>
        <div class="text-center">
            <button type="submit" class="btn bg-white text-primary btn-block">Sign Me In</button>
        </div>
    </form>
    <div class="new-account mt-3">
        <p class="text-white">Don't have an account? <a class="text-white" href="/register">Sign up</a></p>
    </div>
@endsection
