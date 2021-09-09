@extends('user.layout.index')
@section('title', 'Login')
@section('content')
    <h4 class="text-center mb-4 text-white">Sign up your account</h4>
    <p>{{empty($mes) ? '' : $mes}}</p>
    <form action="" method="post">
        {{csrf_field()}}
        <div class="form-group">
            <label class="mb-1 text-white"><strong>Username</strong></label>
            <input type="text" class="form-control" placeholder="username" name="name">
        </div>
        <div class="form-group">
            <label class="mb-1 text-white"><strong>Email</strong></label>
            <input type="email" class="form-control" placeholder="hello@example.com" name="email">
        </div>
        <div class="form-group">
            <label class="mb-1 text-white"><strong>Password</strong></label>
            <input type="password" class="form-control" name="Password">
        </div>
        <div class="text-center mt-4">
            <button type="submit" class="btn bg-white text-primary btn-block">Sign me up</button>
        </div>
    </form>
    <div class="new-account mt-3">
        <p class="text-white">Already have an account? <a class="text-white" href="/login">Sign in</a></p>
    </div>
@endsection
