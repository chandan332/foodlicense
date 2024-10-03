@extends('layouts.root', ['route' => '/application'])

@php
    $states = [
        'Andhra Pradesh',
        'Arunachal Pradesh',
        'Assam',
        'Bihar',
        'Chhattisgarh',
        'Goa',
        'Gujarat',
        'Haryana',
        'Himachal Pradesh',
        'Jharkhand',
        'Karnataka',
        'Kerala',
        'Madhya Pradesh',
        'Maharashtra',
        'Manipur',
        'Meghalaya',
        'Mizoram',
        'Nagaland',
        'Odisha',
        'Punjab',
        'Rajasthan',
        'Sikkim',
        'Tamil Nadu',
        'Telangana',
        'Tripura',
        "Uttar
    Pradesh",
        'Uttarakhand',
    ];

    $cards = [
        [
            'title' => 'Reach out to our Experts',
            'body' => 'We have the best business experts who can resolve all your queries',
            'image' => '/images/tech-support.gif',
        ],
        [
            'title' => 'Provide all the required documents',
            'body' => 'Provide all the documents. Our team will initiate the paperwork on your behalf',
            'image' => '/images/document.gif',
        ],
        [
            'title' => 'Get your Fssai Registration done',
            'body' => 'Registration is completed and the certificates will be sent to you.',
            'image' => '/images/user.webp',
        ],
    ];
@endphp

@section('head')
    <meta name="description"
        content="Discover the simple step-by-step process to apply for your FSSAI license online. Ensure food safety compliance and legal approval for your business" />

    <meta name="keywords"
        content="fssai registration, fssai renewal, fssai certificate, fssai license renewal, fssai licence, food safety certificate online, food license apply, fssai registration online, food license renewal, food licence apply, foscos renewal, fssai license registration, fssai renewal online, fssai license fee, fssai apply online, food licence registration, fssai registration fees, food licence renewal, fssai food license, food safety and standards authority of india, apply for fssai license, fssai licence renewal, food license fees, food licence online, fssai license apply online, food license apply online, food licence apply online, food license online apply, fssai certificate download, food license telangana, online food licence apply, fssai registration renewal, fssai license renewal online," />
@endsection

@section('content')
    <div class="ff-poppins">
        <div class="row">
            <div class="col-md-4 hidden">
                <div class="h-100 d-flex flex-column justify-content-center align-items-center gap-2 text-center ">
                    <h1 class="text-decoration-underline fw-bold">Apply FSSAI Food License</h1>
                    <h3 class="fw-semibold">Package Starts from <br /><span
                            class="text-danger text-decoration-line-through">₹1999</span> ₹999</h3>
                    <p class="">The fastest FSSAI registration portal online, hands down. Application for 50,000 Food
                        Licenses Completed Since 2023.</p>
                </div>
            </div>
            <div class="col-md-5 ms-auto mt-4 px-4 fw-semibold hidden">
                <img src="{{ Vite::image('fssai_update.jpg') }}" alt="">
                <h3 class="text-center">Get FREE Consultation <br /> from <span class="text-danger">FSSAI Expert</span></h3>
                <form class="needs-validation " action="{{ route('form.submit') }}" method="POST" novalidate>
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label">Name<span class="text-danger">*</span></label>
                        <input type="text" class="form-control" id="name" name="name" placeholder="Your name"
                            required />
                        <div class="invalid-feedback">
                            Please provide a full name...
                        </div>
                    </div>
                    <div class="mb-3 tw-hidden">
                        <label for="email" class="form-label">Email Address<span class="text-danger">*</span></label>
                        <input type="email" class="form-control " id="email" name="email" placeholder="Your email"
                            value="noreply@fssai.com" required />
                        <div class="invalid-feedback">
                            Please provide a valid email...
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="phone" class="form-label">Phone Number</label>
                        <input type="number" class="form-control" id="phone" name="phone"
                            placeholder="Your phone number" required />
                        <div class="invalid-feedback">
                            Please provide a valid phone number...
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="state" class="form-label">State</label>
                        <select class="form-select" id="state" name="state" aria-label="Default select example"
                            required>
                            <option value="West Bengal" selected>
                                West Bengal
                            </option>
                            @foreach ($states as $state)
                                <option value="{{ $state }}">{{ $state }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="mb-3 tw-hidden">
                        <label for="message" class="form-label">Message</label>
                        <textarea class="form-control text-start " id="message" name="message" rows="3">
                            I have signed up!
                        </textarea>
                    </div>
                    <div class="d-flex justify-content-center">
                        <button type="submit" class="btn btn-dark btn-sm">Get Started</button>
                    </div>
                </form>
            </div>
        </div>

        <div class="row gap-2 mt-4 hidden">
            <div class="col tw-max-w-[1024px] m-auto">
                <h1 class="text-center fw-bold tw-underline">Sample Certificate</h1>
                <div class="tw-flex tw-flex-col tw-items-center mt-4 overflow-y-auto">
                    <img src="{{ Vite::image('certificate/1.jpg') }}" alt="" class="img-fluid">
                </div>
            </div>
        </div>

        <div>
            <h1 class="col-md-10 m-auto mt-4 text-center fw-bold">How To do Your Fssai Registration through <br /><span
                    class="text-danger">Food License?</span></h1>
            <div class="row g-4">
                @foreach ($cards as $card)
                    <div class="col-md-4 hidden" style="--transition-delay: {{ $loop->iteration * 0.5 }}s">
                        <div class="card text-center h-100 border-0">
                            <img src="{{ $card['image'] }}" class="card-img-top tw-w-1/3 md:tw-w-2/5  m-auto"
                                alt="...">
                            <div class="card-body">
                                <h5 class="card-title fw-bold">{{ $card['title'] }}</h5>
                                <p class="card-text fw-medium">{{ $card['body'] }}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    @endsection @section('script')
    <script>
        (() => {
            "use strict";
            const forms = document.querySelectorAll(".needs-validation");
            Array.from(forms).forEach((form) => {
                form.addEventListener(
                    "submit",
                    (event) => {
                        if (!form.checkValidity()) {
                            event.preventDefault();
                            event.stopPropagation();
                        }

                        form.classList.add("was-validated");
                    },
                    false
                );
            });
        })();
    </script>
@endsection
