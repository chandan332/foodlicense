@extends('layouts.root')

@php
    $polices = [
        [
            "heading" => [
                "Information We Collect", 
                "We may collect the following personal information from you:",
            ],
            "desc" => [
                "Name and contact information: This includes your name, email address, phone number, and mailing address.",
                "Demographic information: This includes your age, gender, location, and other demographic information.",
                "Website usage information: This includes information about how you use our website, such as the pages you visit and the links you click.",
                "Facebook ad information: This includes information about the Facebook ads you see and interact with, such as the ad's content, the advertiser, and your clicks and likes.",
            ]
        ],
        [
            "heading" => [
                "How We Use Your Information", 
                "We use your personal information to:",
            ],
            "desc" => [
                "Provide you with our services, such as FSSAI license filing and copyrighting.",
                "Tailor our services to your interests.",
                "Send you marketing communications, such as newsletters and promotional offers.",
                "Improve our website and services.",
                "Comply with legal and regulatory requirements.",
            ]
        ],
        [
            "heading" => [
                "How We Share Your Information", 
                "We may share your personal information with:",
            ],
            "desc" => [
                "Third-party service providers who help us operate our business, such as website hosting providers and email marketing providers.",
                "Advertisers who use our Facebook ads to reach potential customers.",
                "Government agencies or law enforcement officials if required by law.",
                "We will not share your personal information with other third parties without your consent.",
            ]
        ],
        [
            "heading" => [
                "Your Choices", 
                "You can control how we use your personal information by:",
            ],
            "desc" => [
                "Opting out of marketing communications: You can unsubscribe from our marketing emails by clicking on the 'unsubscribe' link in any marketing email we send you.",
                "Managing your cookies: You can manage your cookies by adjusting the settings in your web browser.",
            ]
        ],
    ]
@endphp

@section('content')
    <h1 class="">Privacy Policy</h1>
    <div class="ms-2 ms-md-4">
        <h3>Introduction</h3>
        <p class="ms-2 ms-md-4">Legal Success India ("LSI") is committed to protecting your privacy. This Privacy Policy explains how we collect, use, and disclose your personal information when you use our website, services, or Facebook ads.</p>
        @foreach ($polices as $police)
            @foreach ($police['heading'] as $head)
                <h3 class="mb-3">{{ $head }}</h3>
            @endforeach
            @foreach ($police['desc'] as $desc)
                <p class="ms-2 ms-md-4"><i class="fa-solid fa-bolt"></i> {{ $desc }}</p>
            @endforeach
        @endforeach
    </div>
@endsection