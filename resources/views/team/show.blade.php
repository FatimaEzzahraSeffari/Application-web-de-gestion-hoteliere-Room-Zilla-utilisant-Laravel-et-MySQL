@extends('layouts.app')
@section('title', $viewData["title"])
@section('subtitle', $viewData["subtitle"])
@section('content')
<br><br><br><br><br><br>
<center><div class="card mb-3" style="width: 950px;height:400px;">
<div class="row g-0">
<div class="col-md-4">

<img src="{{ asset('/storage/public/teams/'.$viewData["team"]->getImage()) }}" class="img-fluid rounded-start">
</div>
<div class="col-md-8">
    <div class="card-body">
    <h5 class="card-title">
    {{ $viewData["team"]["name"] }} ({{ $viewData["team"]["profession"]
    }})

    </h5>
   <p> i'm one of the team of ROOMZILLA application welcome to us </p>
    </div>
    </div>
    </div>
    </div>
    <br><br><br><br><br><br>
    
    @endsection
</center>