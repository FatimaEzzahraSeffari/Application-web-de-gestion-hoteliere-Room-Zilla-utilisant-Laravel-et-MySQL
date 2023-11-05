

@extends('layouts.app')

@section('title', $viewData["title"])
@section('subtitle', $viewData["subtitle"])
@section('content')
<!-- Page Header Start -->
        <div class="container-fluid page-header mb-5 p-0" style="background-image: url(img/carousel-1.jpg);">
            <div class="container-fluid page-header-inner py-5">
                <div class="container text-center pb-5">
                    <h1 class="display-3 text-white mb-3 animated slideInDown">Rooms</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center text-uppercase">
                            <li class="breadcrumb-item"><a href="/">Home</a></li>
                          
                            <li class="breadcrumb-item text-white active" aria-current="page">Rooms</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <!-- Page Header End -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
            <h6 class="section-title text-center text-primary text-uppercase">Our Rooms</h6>
            <h1 class="mb-5">Explore Our <span class="text-primary text-uppercase">Rooms</span></h1>
        </div>
        <div class="row g-4">
@foreach ($viewData["rooms"] as $room)
<div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
    <div class="room-item shadow rounded overflow-hidden">
        <div class="position-relative">
    <img src="{{ asset('/storage/public/rooms/'.$room->getImage()) }}" class="img-fluid">
    <small class="position-absolute start-0 top-100 translate-middle-y bg-primary text-white rounded py-1 px-3 ms-4">${{ $room["price"] }}/Night</small>
</div>
<div class="p-4 mt-2">
    <div class="d-flex justify-content-between mb-3">
        <h5 class="mb-0">{{ $room["name"] }}</h5>
<div class="ps-2">
    <small class="fa fa-star text-primary"></small>
    <small class="fa fa-star text-primary"></small>
    <small class="fa fa-star text-primary"></small>
    <small class="fa fa-star text-primary"></small>
    <small class="fa fa-star text-primary"></small>
</div>
</div>
<div class="d-flex mb-3">
    <small class="border-end me-3 pe-3"><i class="fa fa-bed text-primary me-2"></i></small>
    <small class="border-end me-3 pe-3"><i class="fa fa-bath text-primary me-2"></i></small>
    <small><i class="fa fa-wifi text-primary me-2"></i></small>
</div>
<p class="text-body mb-3">{{ $room["description"] }}</p>
<div class="d-flex justify-content-between">
    <a href="{{ route('room.show', ['id'=> $room["id"]]) }}"
        class="btn bg-primary text-white">View Detail </a>
    <a class="btn btn-sm btn-dark rounded py-2 px-4" href="/bookings">Book Now</a>
</div>
</div>
</div>
</div>
@endforeach
</div>
</div>
</div>
<br><br><br><br><br><br><br><br><br><br><br><br>
@endsection