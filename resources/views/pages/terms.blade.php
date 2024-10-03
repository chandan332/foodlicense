@extends('layouts.root')

@php
    $terms = [
        [
            "title" => "Business Information",
            "desc" => "Legal Success India22/1 Mominpore Road, Kolkata 700023",
        ],
        [
            "title" => "Services",
            "desc" => "Legal Success India ('LSI') offers email copywriting and email automation services, including daily newsletters and advertisements for various services."
        ],
        [
            "title" => "Payment Terms",
            "desc" => "Full payment for services is required before work commences."
        ],
        [
            "title" => " Refund or Cancellation Policy",
            "desc" => "If no work has been performed, a full refund will be issued within 15 working days."
        ],
        [
            "title" => " Handling of Client Data and Privacy",
            "desc" => "LSI is committed to protecting your privacy. This Privacy Policy explains how we collect, use, and disclose your personal information when you use our website, services, or Facebook ads."
        ],
        [
            "title" => "Disclaimers and Limitations of Liability",
            "desc" => "While LSI strives for accuracy, we do not make warranties regarding the completeness, accuracy, reliability, or availability of the content. Your use of our services is at your own risk. LSI shall not be liable for any direct, indirect, consequential, special, or incidental damages."
        ],
        [
            "title" => "Contact Information for Support or Inquiries",
            "desc" => "Phone: +91 9007299384 Phone: +91 6290634766 Email: info@legalsuccessindia.com We aim to respond promptly to inquiries and provide support to ensure a positive experience for our users."
        ],
        [
            "title" => "Governing Law",
            "desc" => "These terms and conditions shall be governed by and construed in accordance with the laws of India."
        ],
        [
            "title" => "Changes to Terms",
            "desc" => "LSI reserves the right to update or modify these terms and conditions at any time without prior notice. Users are responsible for reviewing these terms periodically."
        ]
    ]
@endphp

@section('content')
    <h1><span class="text-primary-emphasis ">##</span> Legal Success India - Terms and Conditions</h1>
    <div class="ms-2 ms-md-4 ">
        @foreach ($terms as $term)
            <h4><span class="text-primary-emphasis ">**{{$loop->index + 1}}.</span> {{$term['title']}} :</h4>
            <p class="ms-2 ms-md-4">{{$term['desc']}}</p>
        @endforeach
        <p class="ms-2 ms-md-4">By using our services, you agree to these terms and conditions.</p>
    </div>
@endsection