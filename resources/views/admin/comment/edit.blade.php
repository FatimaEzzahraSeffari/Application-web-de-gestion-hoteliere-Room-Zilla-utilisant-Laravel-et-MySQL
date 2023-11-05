
@extends('layouts.admin')
@section('title', $viewData["title"])
@section('content')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css">

<div class="card mb-4">
<div class="card-header"style="font-size: 24px; font-weight: bold;">
Edit Comment
</div>
<div class="card-body">
@if($errors->any())
<ul class="alert alert-danger list-unstyled">
@foreach($errors->all() as $error)
<li>- {{ $error }}</li>
@endforeach
</ul>
@endif
<form method="POST" action="{{ route('admin.comment.update', ['id'=> $viewData['comment']->getId()]) }}"
enctype="multipart/form-data">
@csrf
@method('PUT')
<div class="row">
    <div class="col">
        <div class="mb-3 row">
            <label class="col-lg-2 col-md-6 col-sm-12 col-form-label" style="color:black;font-size: 18px; font-weight: bold;  ">Name :</label>
            <div class="col-lg-10 col-md-6 col-sm-12">  
    <input name="name" value="{{ $viewData['comment']->getName() }}" type="text" class="form-control" style="background-color: #ffffff;height:50px;width:370px;" >
    </div></div></div>



    <div class="col">
        <div class="mb-3 row">
            <label class="col-lg-2 col-md-6 col-sm-12 col-form-label" style="color:black;font-size: 18px; font-weight: bold;">Work :</label>
            <div class="col-lg-10 col-md-6 col-sm-12">
        <input name="profession" value="{{ $viewData['comment']->getProfession() }}" type="text" class="form-control" style="background-color: #ffffff;height:50px;width:270px; ">
            </div>
        </div>
    </div>
</div>

        <div class="row">
            <div class="col">
                <div class="mb-3 row">
                    <label class="col-lg-2 col-md-6 col-sm-12 col-form-label" style="color:black;font-size: 18px; font-weight: bold;"> Comment :</label>
                    <div class="col-lg-10 col-md-6 col-sm-12">
    <textarea class="form-control" name="remarque" rows="3" style="background-color: #ffffff;height:100px;width:470px; color:black;margin-left: -40px;" >{{ $viewData['comment']->getRemarque() }}</textarea>
    </div>
</div>
</div>
</div>


        <div class="row">
            <div class="col">
            <div class="mb-3 row">
            <label class="col-lg-2 col-md-6 col-sm-12 col-form-label" style="color:black;font-size: 18px; font-weight: bold;">&nbsp; &nbsp; &nbsp;&nbsp;Image :</label>
            <div class="col-lg-10 col-md-6 col-sm-12">
            <input class="form-control" type="file"style="width:380px" name="image" style="font-size:100%;" value="{{ $viewData['comment']->getImage() }}" style=" margin-left: 20px;">
            </div>
            </div>
            </div>
        </div>
        <button type="submit" class="btn btn-warning"style="background-color:black;color:rgb(255, 255, 255);width: 90px;">Edit</button>
    </div>

    

    </form>
    </div>
    </div>
    @endsection