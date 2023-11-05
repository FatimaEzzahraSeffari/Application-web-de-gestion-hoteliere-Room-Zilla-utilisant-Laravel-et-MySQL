@extends('layouts.admin')
@section('title', $viewData["title"])
@section('content')
<div class="card mb-4">
<div class="card-header"style="font-size: 24px; font-weight: bold;">
Edit Contact
</div>
<div class="card-body">
@if($errors->any())
<ul class="alert alert-danger list-unstyled">
@foreach($errors->all() as $error)
<li>- {{ $error }}</li>
@endforeach
</ul>
@endif
<form method="POST" action="{{ route('admin.contact.update', ['id'=> $viewData['contact']->getId()]) }}"
enctype="multipart/form-data">
@csrf
@method('PUT')
<div class="row">
<div class="col">
<div class="mb-3 row">
<label class="col-lg-2 col-md-6 col-sm-12 col-form-label"style="color:black;font-size: 13px; font-weight: bold;">Name:</label>
<div class="col-lg-10 col-md-6 col-sm-12">
<input name="name" value="{{ $viewData['contact']->getName() }}" type="text" class="form-control">
</div>
</div>
</div>

<div class="col">
    <div class="mb-3 row">
    <label class="col-lg-2 col-md-6 col-sm-12 col-form-label"style="color:black;font-size: 13px; font-weight: bold;">Email:</label>
    <div class="col-lg-10 col-md-6 col-sm-12">
    <input name="email" value="{{ $viewData['contact']->getEmail() }}" type="email" class="form-control">
    </div>
    </div>
    </div>
    </div>
</div>

    <div class="row">
        
<div class="col">
        <div class="mb-3 row">
            <label class="col-lg-2 col-md-6 col-sm-12 col-form-label"style="color:black;font-size: 13px; font-weight: bold;">&nbsp;&nbsp;Phone:</label>
            <div class="col-lg-10 col-md-6 col-sm-12">
            <input name="phone" value="{{ $viewData['contact']->getPhone() }}"  type="tel" class="form-control"style="width: 250px;">
        </div>
        </div>
        </div>
     
            <div class="col">
                <div class="mb-3 row">
                <label class="col-lg-2 col-md-6 col-sm-12 col-form-label"style="color:black;font-size: 13px; font-weight: bold;">Gender:</label>
                <div class="col-lg-10 col-md-6 col-sm-12">
                    <select class="form-control" required name="gender"style="width: 190px;">
                        <option value="" hidden>Gender</option>
                        <option value="male" <?php if ($viewData['contact']->getGender() === 'male') echo 'selected'; ?>>male</option>
                        <option value="female" <?php if ($viewData['contact']->getGender() === 'female') echo 'selected'; ?>>female</option>
                        <option value="other" <?php if ($viewData['contact']->getGender() === 'other') echo 'selected'; ?>>other</option>
                      </select>
                      <span class="select-arrow"></span>
                    
                      
                </div>
                </div>
                </div>
        </div>

    <div class="mb-3">
    <label class="form-label"style="color:black;font-size: 13px; font-weight: bold;">&nbsp;&nbsp;Message:</label>
    <textarea class="form-control" name="message"
    rows="3" type="text" style="height: 70px;width:800px;margin-left:20px;">{{ $viewData['contact']->getMessage() }}</textarea>
    </div>
    <div class="row">
    <div class="col">
        <div class="mb-3 row">
            <label class="col-lg-2 col-md-6 col-sm-12 col-form-label"style="color:black;font-size: 13px; font-weight: bold;">&nbsp;&nbsp;Country:</label>
            <div class="col-lg-10 col-md-6 col-sm-12">
    <input class="form-control"value="{{ $viewData['contact']->getCountry() }}" type="text" placeholder="Country, ZIP, city..." name="country"style="width: 190px;">
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