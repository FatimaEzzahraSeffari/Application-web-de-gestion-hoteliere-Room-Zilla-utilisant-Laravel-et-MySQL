@extends('layouts.app')
@section('title', $viewData["title"])
@section('subtitle', $viewData["subtitle"])
@section('content')
<br><br><br><br><br><br>
<center><div class="card mb-3">
    <div class="row g-0">
        <div class="col-md-4">
            <img src="{{ asset('/storage/public/rooms/'.$viewData["room"]->getImage()) }}" class="img-fluid rounded-start">
        </div>
        <div class="col-md-8">
            <div class="card-body">
                <h5 class="card-title">
                    {{ $viewData["room"]["name"] }} (${{ $viewData["room"]["price"] }}/Night)
                </h5>
                <p class="card-text">{{ $viewData["room"]["description"] }}</p>
                <a class="btn btn-sm btn-dark rounded py-2 px-4" href="/bookings">Book Now</a>
            </div>
        </div>
    </div>
</div>
<br><br><br><br><br><br>
@endsection

</center>