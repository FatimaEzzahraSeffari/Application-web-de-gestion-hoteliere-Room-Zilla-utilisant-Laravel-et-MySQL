@extends('layouts.app')
@section('title', $viewData["title"])
@section('subtitle', $viewData["subtitle"])
@section('content')
<br><br><br><br><br><br>
<center><div class="card mb-3"style="width: 950px;height:400px;">
<div class="row g-0">

<div class="col-md-8">
    <div class="card-body">
    <h5 class="card-title">
    {{ $viewData["service"]["name"] }} 
   
    </h5>
    <p class="card-text">{{ $viewData["service"]["description"] }}</p>
    <p class="card-text"><small class="text-muted" style="font-size: 20px;"><strong>WELCOME TO ROOMZILLA ACTIVITIES JOIN US </strong></small></p>

    </div>
    </div>
    <img src="{{ asset('img/r4.png') }}" alt="image" style="width: 200px; ">
    </div>
    </div>
    <br><br><br><br><br><br>
    @endsection
</center>