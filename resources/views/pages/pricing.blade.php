@extends('layouts.root')

@php
    $items = [
      [
        "price" => "999",
        "title" => "BASIC FSSAI REGISTRATION",
        "desc" => "1 Year Charges",
        "btncolor" => "btn-outline-primary"
      ],
      [
        "price" => "1999",
        "title" => "BASIC FSSAI REGISTRATION",
        "desc" => "5 Years Charges",
        "btncolor" => "btn-primary"
      ],
      [
        "price" => "1999",
        "title" => "STATE FSSAI LICENSE REGISTRATION",
        "desc" => "Professional Fees(excluding government fees)",
        "btncolor" => "btn-outline-danger"
      ],
      [
        "price" => "2999",
        "title" => "CENTERAL FOOD LICENSE REGISTRATION",
        "desc" => "Professional Fees(excluding government fees)",
        "btncolor" => "btn-danger"
      ],
    ]
@endphp

@section('content')
<div class="text-center ">
    <h1 class="text-decoration-underline ">Find a Pricing Plan</h1>
    <div class="row">
      @foreach ($items as $item)
      <div class="col-6 col-md-3">
        <div class="card mb-4 py-2">
            <h1 class="card-title pricing-card-title">₹{{ $item['price'] }}</h1>
          <div class="card-header">
            <h4 class="my-0 font-weight-normal">{{ $item['title'] }}</h4>
          </div>
          <div class="card-body">
            <p>{{ $item['desc'] }}</p>
            <ul class="list-unstyled mt-3 mb-4">
              <li class="p-2 ">
                <i class="fa-solid fa-arrow-right fa-fade"></i> preparation and submition of your FSSAI registration application on your behalf.
              </li>
              <li class="p-2">
                <i class="fa-solid fa-arrow-right fa-fade"></i> assistance with any questions or concerns you may have through out the registration process.
              </li>
            </ul>
            <a href="https://docs.google.com/forms/d/e/1FAIpQLSfuZUUv1f7r2Na7g0cqHpbZcIuTqdglqbOI2SnvLzQpc-D6Yg/viewform" class="btn btn-lg btn-block {{ $item['btncolor'] }}">Apply</a>
          </div>
        </div>
      </div>
      @endforeach
    </div>
</div>
@endsection