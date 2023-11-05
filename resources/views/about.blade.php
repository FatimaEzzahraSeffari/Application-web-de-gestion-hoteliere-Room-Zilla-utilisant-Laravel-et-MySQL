
@extends('layouts.app')
@section('title', $viewData["title"])

@section('content')
 <!-- Page Header Start -->
 <div class="container-fluid page-header mb-5 p-0" style="background-image: url(img/carousel-1.jpg);">
    <div class="container-fluid page-header-inner py-5">
        <div class="container text-center pb-5">
            <h1 class="display-3 text-white mb-3 animated slideInDown">About Us</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb justify-content-center text-uppercase">
                    <li class="breadcrumb-item"><a href="/">Home</a></li>
                   
                    <li class="breadcrumb-item text-white active" aria-current="page">About</li>
                </ol>
            </nav>
        </div>
    </div>
</div>
<!-- Page Header End -->
<!-- About Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="row g-5 align-items-center">
            <div class="col-lg-6">
                <h6 class="section-title text-start text-primary text-uppercase">About Us</h6>
                <h1 class="mb-4">Welcome to <span class="text-primary text-uppercase">ROOMZILLA</span></h1>
                <p class="mb-4">Welcome to <span class="text-primary text-uppercase"> ROOMZILLA</span> the leading booking platform for all your travel needs. Our mission is to simplify the booking process and provide you with a seamless and enjoyable experience from start to finish. Whether you're planning a vacation, a business trip, or a weekend getaway, our application is designed to make your travel arrangements effortless.
                    At  ROOMZILLA, we have a dedicated team of travel enthusiasts and technology experts who work tirelessly to ensure that our booking application meets the highest standards. With years of experience in the industry, our team brings a wealth of knowledge and expertise to create a reliable and user-friendly platform that caters to your every need.We take your security and privacy seriously. Our application is built with advanced encryption technology to protect your personal and payment information. Rest assured that your data is handled with the utmost care and in compliance with applicable regulations.</p>
               <br>
              

                    <div class="row g-3 pb-4">
                    
                </div>
                <a class="btn btn-primary py-3 px-5 mt-2" href="/contacts">Contact Us</a>
            </div>
            <div class="col-lg-6">
                <div class="row g-3">
                    <div class="col-6 text-end">
                        <img class="img-fluid rounded w-75 wow zoomIn" data-wow-delay="0.1s" src="img/about-1.jpg" style="margin-top: 25%;">
                    </div>
                    <div class="col-6 text-start">
                        <img class="img-fluid rounded w-100 wow zoomIn" data-wow-delay="0.3s" src="img/about-2.jpg">
                    </div>
                    <div class="col-6 text-end">
                        <img class="img-fluid rounded w-50 wow zoomIn" data-wow-delay="0.5s" src="img/about-3.jpg">
                    </div>
                    <div class="col-6 text-start">
                        <img class="img-fluid rounded w-75 wow zoomIn" data-wow-delay="0.7s" src="img/about-4.jpg">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<br><br><br><br><br><br><br><br><br><br><br>
<!-- About End -->
@endsection
