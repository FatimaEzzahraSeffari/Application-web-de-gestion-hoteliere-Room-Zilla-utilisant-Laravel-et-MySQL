@extends('layouts.admin')
@section('title', $viewData["title"])
@section('content')
<div class="card mb-4">
<div class="card-header"style="font-size: 24px; font-weight: bold;">
Edit Users
</div>
<div class="card-body">
@if($errors->any())
<ul class="alert alert-danger list-unstyled">
@foreach($errors->all() as $error)
<li>- {{ $error }}</li>
@endforeach
</ul>
@endif
<form method="POST" action="{{ route('admin.user.update', ['id'=> $viewData['user']->getId()]) }}"
enctype="multipart/form-data">
@csrf
@method('PUT')
<div class="row">
<div class="col">
<div class="mb-3 row">
<label class="col-lg-2 col-md-6 col-sm-12 col-form-label"style="color:black;font-size: 13px; font-weight: bold;">Name:</label>
<div class="col-lg-10 col-md-6 col-sm-12">
<input name="name" value="{{ $viewData['user']->getName() }}" type="text" class="form-control"style="width:230px;">
</div>
</div>
</div>


<div class="col">
    <div class="mb-3 row">
    <label class="col-lg-2 col-md-6 col-sm-12 col-form-label"style="color:black;font-size: 13px; font-weight: bold;">Email:</label>
    <div class="col-lg-10 col-md-6 col-sm-12">
    <input name="email" value="{{ $viewData['user']->getEmail() }}" type="email" class="form-control"style="width:350px;">
    </div>
    </div>
    </div>
    </div>

<div class="row">

    <div class="col">
        <div class="mb-3 row">
        <label class="col-lg-2 col-md-6 col-sm-12 col-form-label"style="color:black;font-size: 13px; font-weight: bold;">Password:</label>
        <div class="col-lg-10 col-md-6 col-sm-12">
        <input name="password" value="{{ $viewData['user']->getPassword() }}" type="password" class="form-control"style="width:330px;">
        </div>
        </div>
        </div>
        </div>
    </div>
    
<button type="submit" class="btn btn-warning" style="width: 90px; margin-left: 10px; position: relative;background-color:black;color:rgb(255, 255, 255); top: -10px;">Edit</button>
</div>

    </form>
    </div>
    </div>
    @endsection