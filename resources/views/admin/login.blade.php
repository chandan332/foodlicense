@extends('layouts.root')

@empty($error)
    @php $error = null; @endphp
@endempty

@section('content')
    <div class="toast m-auto mb-4 @isset($error) show @endisset" role="alert" aria-live="assertive"
        aria-atomic="true">
        <div class="toast-header">
            <strong class="me-auto fw-bold">LegalSuccessIndia</strong>
            <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
        </div>
        <p class="toast-body text-danger">
            Sorry, {{ $error }}.
        </p>
    </div>
    <form action="{{ route('admin.login') }}" method="post">
        @csrf
        <div class="mb-3">
            <label for="email" class="form-label">Email address</label>
            <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email"
                required>
            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" class="form-control" id="password" name="password" placeholder="Enter your password"
                required>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection('content')
