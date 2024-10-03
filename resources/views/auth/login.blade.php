@extends('layouts.root')

@section('content')
    <form action="{{ route('login') }}" method="post">
        @csrf
        <div class="mb-3">
            <label for="email" class="form-label">Email address</label>
            <input type="email" class="form-control" id="email" name="email" value="{{ old('email') }}" required>
            @error('email')
                <span class="text-danger">{{ $message }}</span>
            @else
                <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" class="form-control" id="password" name="password" required>
            @error('password')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        <div class="mb-3 form-check">
            <input type="checkbox" class="form-check-input" id="remember" name="remember">
            <label class="form-check-label" for="remember">Remember me</label>
        </div>
        <div class="mb-3 d-flex gap-4 align-items-center">
            <button type="submit" class="btn btn-primary">Login</button>
            <a href="{{ route('register') }}" class="text-decoration-underline text-danger-emphasis">Register</a>
        </div>
    </form>
@endsection
