@extends('layouts.root')

@php
    $titleDescs = [
        [
            "title" => "Refund Policy:",
            "desc" => [
                "title" => "Legal Success India ('LSI') understands that circumstances may arise that require the cancellation of services. Our refund policy is designed to be fair and transparent.",
                "desc" => [
                    "A full refund will be issued if no work has been initiated or completed.",
                    "Refund requests must be submitted within 15 working days from the date of payment.",
                    "Refunds will be processed through the original payment method."
                ]
            ]
        ],
        [
            "title" => "Cancellation Policy:",
            "desc" => [
                "title" => "Clients have the right to cancel services at any time, subject to the following conditions:",
                "desc" => [
                    "A full refund will be provided if a cancellation request is received before any work has been initiated.",
                    "A partial refund may be considered based on the work completed if a cancellation request is received after work has commenced but is not yet completed.",
                    "No refunds will be issued once the work is completed."
                ]
            ] 
        ],
        [
            "title" => "How to Request a Refund or Cancellation:",
            "desc" => [
                "title" => "Clients can request a refund or cancellation by contacting Legal Success India through the following methods:",
                "desc" => [
                    "Phone: +91 9007299384 or +91 6290634766",
                    "Email: info@legalsuccessindia.com"
                ]
            ]
        ],
        [
            "title" => "Refund Processing:",
            "desc" => [
                "title" => "",
                "desc" => [
                    "Refunds will be processed within 15 working days of the request.",
                    "The refund will be issued using the original payment method."
                ]
            ]
        ],
        [
            "title" => "Modifications to the Refund and Cancellation Policy",
            "desc" => [
                "title" => "Legal Success India reserves the right to update or modify the refund and cancellation policy at any time without prior notice. Clients are encouraged to review this policy periodically.",
                "desc" => []
            ]
        ]
    ] 
@endphp

@section('content')
    <h1 class=""><span class="text-primary-emphasis ">#</span> Refund and Cancellation Policy</h1>
    <div class="my-4 ">
        <div class="my-2 d-flex flex-column gap-2 ms-2 ms-md-4">
            <p>***</p>
            @foreach ($titleDescs as $titleDesc)
                <h3><span class="text-primary-emphasis  ">##</span> {{ $titleDesc['title'] }}</h3>
                <div class="d-flex flex-column gap-2 ms-2 ms-md-4">
                    <h6>{{ $titleDesc['desc']['title'] }}</h6>
                    <div>
                        @foreach ($titleDesc['desc']['desc'] as $item)
                        <p><span class="text-danger ">*</span> {{ $item }}</p>
                        @endforeach
                    </div>
                </div>
            @endforeach
            <p class="ms-2 ms-md-4">By engaging in our services, you agree to abide by the terms of this refund and cancellation policy.</p>
            <p>***</p>
        </div>
    </div>
@endsection
