@extends('layouts.admin')
@section('title', $viewData["title"])
@section('content')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css">

<div class="card mb-4">
<div class="card-header"style="font-size: 24px; font-weight: bold;">
Edit Team
</div>
<div class="card-body">
@if($errors->any())
<ul class="alert alert-danger list-unstyled">
@foreach($errors->all() as $error)
<li>- {{ $error }}</li>
@endforeach
</ul>
@endif
<form method="POST" action="{{ route('admin.team.update', ['id'=> $viewData['team']->getId()]) }}"
enctype="multipart/form-data">
@csrf
@method('PUT')
<div class="row">
    <div class="col">
        <div class="mb-3 row">
            <label class="col-lg-2 col-md-6 col-sm-12 col-form-label" style="color:black;font-size: 18px; font-weight: bold;">Name:</label>
            <div class="col-lg-10 col-md-6 col-sm-12">
                <input name="name" value="{{ $viewData['team']->getName() }}" type="text" class="form-control">
            </div>
        </div>
    </div>
    <br>
    <div class="col">
        <div class="mb-3 row">
            <label class="col-lg-2 col-md-6 col-sm-12 col-form-label" style="color:black;font-size: 18px; font-weight: bold;">Work:</label>
            <div class="col-lg-10 col-md-6 col-sm-12">
                <input name="profession" value="{{ $viewData['team']->getProfession() }}"type="text" class="form-control">
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col">
        <div class="mb-3 row">
            <label class="col-lg-2 col-md-6 col-sm-12 col-form-label" style="color:black;font-size: 18px; font-weight: bold;">Image:</label>
            <div class="col-lg-10 col-md-6 col-sm-12">
                <input class="form-control" type="file" name="image" value="{{ $viewData['team']->getImage() }}">
            </div>
        </div>
    </div>

    <div class="col">
        &nbsp;
    </div></div>
        <button type="submit" class="btn btn-warning"style="background-color:black;color:rgb(255, 255, 255);width: 90px;">Edit</button>

    </div>
    </form>
    </div>
    </div>
    @endsection