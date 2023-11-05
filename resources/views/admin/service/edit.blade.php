@extends('layouts.admin')
@section('title', $viewData["title"])
@section('content')
<div class="card mb-4">
<div class="card-header"style="font-size: 24px; font-weight: bold;">
Edit Service
</div>
<div class="card-body">
@if($errors->any())
<ul class="alert alert-danger list-unstyled">
@foreach($errors->all() as $error)
<li>- {{ $error }}</li>
@endforeach
</ul>
@endif
<form method="POST" action="{{ route('admin.service.update', ['id'=> $viewData['service']->getId()]) }}"
enctype="multipart/form-data">
@csrf
@method('PUT')
<div class="row">
<div class="col">
<div class="mb-3 row">
<label class="col-lg-2 col-md-6 col-sm-12 col-form-label"style="color:black;font-size: 18px; font-weight: bold;">Name:</label>
<div class="col-lg-10 col-md-6 col-sm-12">
<input name="name" value="{{ $viewData['service']->getName() }}" type="text" class="form-control">
</div>
</div>
</div>


    <div class="col">
    &nbsp;
    </div>
    </div> 
    <div class="mb-3">
    <label class="form-label"style="color:black;font-size: 18px; font-weight: bold;">Description</label>
    <textarea class="form-control" name="description"
    rows="3" type="text" style="height: 90px;">{{ $viewData['service']->getDescription() }}</textarea>
    </div>
    
    <button type="submit" class="btn btn-warning"style="background-color:black;color:rgb(255, 255, 255);width: 90px;">Edit</button>
    </form>
    </div>
    </div>
    @endsection