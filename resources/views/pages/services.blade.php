@extends('layouts.root', ["route"=>"/services"])

@php
    $items = [
        [
            "image" => "Fssai.jpg",
            "title" => "File & Drafting",
            "desc" => "File: Store records. Drafting: Create preliminary documents or plans.",
            "url" => "/pricing",
            
        ],
        [
            "image" => "copywriting.jpg",
            "title" => "Copy Writing",
            "desc" => "Copywriting: Art of creating compelling text to engage and persuade.",
            "url" => "/copypricing",
        ],
        [
            "image" => "Fssai.jpg",
            "title" => "Renewal",
            "desc" => "FSSAI Renewal: Periodic process to maintain food safety compliance in India.",
            "url" => "/pricing",
        ],
    ];

    $comingItems = [ 'digital.jpg', 'graphics.jpg', 'website.jpg' ];
@endphp

@section('content')
<div class="row gy-4 mb-4">
    <h1 class="text-center text-decoration-underline ">SERVICES</h1>
    @foreach ($items as $item)
        <div class="col-12 col-md-4">
            <div class="card">
                <img src="images/{{$item['image']}}" class="card-img-top object-fit-cover" style="max-height: 40vh" alt="...">
                <div class="card-body text-center ">
                    <h5 class="card-title">{{ $item['title'] }}</h5>
                    <p class="card-text">{{ $item['desc'] }}</p>
                    <a href="{{ $item['url'] }}" class="btn btn-danger">Know More</a>
                </div>
            </div>
        </div>
    @endforeach

    <h1 class="text-center text-decoration-underline ">UPCOMING SERVICES</h1>
    @foreach ($comingItems as $item)
        <div class="col-12 col-md-4">
            <div class="card opacity-50" style="pointer-events: none">
                <img src="images/{{$item}}" class="card-img-top object-fit-cover" style="max-height: 40vh" alt="...">
                <div class="card-body text-center ">
                    <p class="card-text">coming soon...</p>
                    <a href="#" class="btn btn-danger">Know More</a>
                </div>
            </div>
        </div>
    @endforeach
</>
@endsection