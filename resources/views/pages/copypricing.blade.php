@extends('layouts.root')

@php
    $items = [
        [
            "price" => "1999",
            "words" => "500",
            "btncolor" => "btn-outline-primary"
        ],
        [
            "price" => "2999",
            "words" => "700",
            "btncolor" => "btn-primary"
        ],
        [
            "price" => "3999",
            "words" => "1000",
            "btncolor" => "btn-outline-primary"
        ],
    ]
@endphp

@section('content')
<div class="text-center ">
    <h1 class="text-decoration-underline ">Find a Pricing Plan</h1>
    <div class="row">
        @foreach ($items as $item)
            <div class="col-6 col-md">
            <div class="card mb-4 py-2">
                <h1 class="card-title pricing-card-title">₹{{ $item['price'] }}</h1>
            <div class="card-header">
                <h4 class="my-0 font-weight-normal">Copywriting</h4>
            </div>
            <div class="card-body">
                <p>{{ $item['words'] }} words</p>
                <ul class="list-unstyled mt-3 mb-4 text-start ms-md-4">
                <li class="p-2 ">
                    <i class="fa-solid fa-arrow-right fa-fade"></i> writing website copy
                </li>
                <li class="p-2">
                    <i class="fa-solid fa-arrow-right fa-fade"></i> writing marketing materials
                </li>
                <li class="p-2">
                    <i class="fa-solid fa-arrow-right fa-fade"></i> writing blog posts
                </li>
                <li class="p-2">
                    <i class="fa-solid fa-arrow-right fa-fade"></i> writing social media posts
                </li>
                <li class="p-2">
                    <i class="fa-solid fa-arrow-right fa-fade"></i> writing email marketing campaigns
                </li>
                </ul>
                <a href="https://docs.google.com/forms/d/e/1FAIpQLSePmvaF9gNTNNtwoIRAG8Dxd6ZLkLKF_YoWq29VW-WRqGjC1A/viewform" class="btn btn-lg btn-block {{ $item["btncolor"] }}">Apply</a>
            </div>
            </div>
            </div>
        @endforeach
    </div>
</div>
@endsection