@extends('layouts.root') @section('content')
<div class="d-flex justify-content-center">
    <img src="images/hands.avif" alt="" />
</div>
<div class="row">
    <div class="col-md-6 col-12">
        <div
            class="d-flex flex-column gap-2 justify-content-center align-items-center p-4"
        >
            <h1 class="text-primary fw-bold">Thank You!</h1>
            <h3 class="text-center">
                Your message has been sent.We will get back to you shortly.
            </h3>
            <a class="btn btn-dark" href="/">Go back to home</a>
        </div>
    </div>
    <div class="col-md-6 col-12">
        <div
            class="d-flex flex-column gap-2 justify-content-center align-items-center p-4"
        >
            <h1 class="fw-bold">KHALID LEGAL WORKS</h1>
            <ul class="ms-4">
                <li style="list-style: disc">
                    <p>22/1 mominpore road kolkata 700023</p>
                </li>
                <li style="list-style: disc"><p>+91 6290634766</p></li>
                <li style="list-style: disc">
                    <a style="text-decoration: underline"
                        >legalsuccessindia@gmail.com</a
                    >
                </li>
            </ul>
        </div>
    </div>
</div>
@endsection
