@extends('layouts.root', ['route'=> '/contact'])

@section('content')
<div class="w-50 m-auto my-4 p-4 card shadow-lg " style="min-width: 300px;">
    <form action="">
        <div class="mb-3">
            <label for="name" class="form-label">Full Name<span class="text-danger ">*</span></label>
            <input type="text" class="form-control" id="name" aria-describedby="emailHelp" required>
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email Address<span class="text-danger ">*</span></label>
            <input type="email" class="form-control" id="email" required>
        </div>
        <div class="mb-3">
            <label for="contact" class="form-label">Contact No.<span class="text-danger ">*</span></label>
            <input type="tel" class="form-control" id="contact" required>
        </div>
        <div class="mb-3">
            <label for="message" class="form-label">Message</label>
            <textarea class="form-control" id="message" rows="3"></textarea>
        </div>
        <button type="submit" class="btn btn-outline-danger ">Request Callback</button>
    </form>
</div>
@endsection