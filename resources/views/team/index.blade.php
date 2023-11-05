<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Hotelier - Hotel HTML Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600;700&family=Montserrat:wght@400;500;600;700&display=swap" rel="stylesheet">  

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>
@extends('layouts.app')
@section('title', $viewData["title"])
@section('subtitle', $viewData["subtitle"])
@section('content')
 <!-- Page Header Start -->
 <div class="container-fluid page-header mb-5 p-0" style="background-image: url(img/carousel-1.jpg);">
    <div class="container-fluid page-header-inner py-5">
        <div class="container text-center pb-5">
            <h1 class="display-3 text-white mb-3 animated slideInDown">Our Team</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb justify-content-center text-uppercase">
                    <li class="breadcrumb-item"><a href="/">Home</a></li>
                    
                    <li class="breadcrumb-item text-white active" aria-current="page">Our Team</li>
                </ol>
            </nav>
        </div>
    </div>
</div>
<!-- Page Header End -->
  <!-- Team Start -->
  <div class="container-xxl py-5">
    <div class="container">
        <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
            <h6 class="section-title text-center text-primary text-uppercase">Our Team</h6>
            <h1 class="mb-5">Explore Our <span class="text-primary text-uppercase">Staffs</span></h1>
        </div>
        <div class="row g-4">
@foreach ($viewData["teams"] as $team)
<div class="col-lg-3 col-md-6 wow fadeInUp" >
    <div class="rounded shadow overflow-hidden">
        <div class="position-relative">
            {{-- <img src="{{ asset('/storage/'.$team->getImage()) }}" class="card-img-top"> --}}
            <img class="img-fluid" src="{{ asset('/storage/public/teams/'.$team->getImage()) }}" alt="">
            <div class="position-absolute start-50 top-100 translate-middle d-flex align-items-center">
                <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-twitter"></i></a>
                <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-instagram"></i></a>
            </div>
        </div>
        <div class="text-center p-4 mt-3">
            <h5 class="fw-bold mb-0">
                <a href="{{ route('team.show', ['id'=> $team["id"]]) }}" class="text-decoration-none text-dark">
                    {{ $team["name"] }}
                </a>
            </h5>
            
            
            <small>{{ $team["profession"] }}</small>
        </div>
    </div>
</div>




@endforeach
</div>
</div>
</div>
<br><br><br><br><br><br><br><br><br><br><br><br>
@endsection