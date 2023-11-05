@extends('layouts.admin')
@section('title', $viewData["title"])
@section('content')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css">

<div class="card mb-4">
<div class="card-header"style="font-size: 24px; font-weight: bold;">
Edit Booking
</div>
<div class="card-body">
@if($errors->any())
<ul class="alert alert-danger list-unstyled">
@foreach($errors->all() as $error)
<li>- {{ $error }}</li>
@endforeach
</ul>
@endif
<form method="POST" action="{{ route('admin.booking.update', ['id'=> $viewData['booking']->getId()]) }}"
enctype="multipart/form-data">
@csrf
@method('PUT')
<div class="row">
    <div class="col">
        <div class="mb-3 row">
            <label class="col-lg-2 col-md-6 col-sm-12 col-form-label" style="color:black;font-size: 13px; font-weight: bold;">Name:</label>
            <div class="col-lg-10 col-md-6 col-sm-12">
                <input name="name" value="{{ $viewData['booking']->getName() }}" type="text" class="form-control">
            </div>
        </div>
    </div>
    <br>
    <div class="col">
        <div class="mb-3 row">
            <label class="col-lg-2 col-md-6 col-sm-12 col-form-label" style="color:black;font-size: 13px; font-weight: bold;">Email:</label>
            <div class="col-lg-10 col-md-6 col-sm-12">
                <input name="email" value="{{ $viewData['booking']->getEmail() }}"type="email" class="form-control">
            </div>
        </div>
    </div>
</div>
<div class="row">
        
    <div class="col">
            <div class="mb-3 row">
                <label class="col-lg-2 col-md-6 col-sm-12 col-form-label"style="color:black;font-size: 13px; font-weight: bold;">&nbsp;&nbsp;Phone:</label>
                <div class="col-lg-10 col-md-6 col-sm-12">
                <input name="phone" value="{{ $viewData['booking']->getPhone() }}"  type="tel" class="form-control"style="width: 250px;">
            </div>
            </div>
            </div>
            
                <div class="col">
                    <div class="mb-3 row">
                        <label class="col-lg-2 col-md-6 col-sm-12 col-form-label"style="color:black;font-size: 13px; font-weight: bold;">Country:</label>
                        <div class="col-lg-10 col-md-6 col-sm-12">
                <input class="form-control"value="{{ $viewData['booking']->getCountry() }}" type="text" placeholder="Country, ZIP, city..." name="country"style="width: 190px;">
            </div>
            </div>
            </div>
            </div>
            <div class="row">
            <div class="col">
                <div class="mb-3 row">
                <label class="col-lg-2 col-md-6 col-sm-12 col-form-label"style="color:black;font-size: 13px; font-weight: bold;">Room<br>type:</label>
                <div class="col-lg-10 col-md-6 col-sm-12">
                    <select class="form-control"required name="room_type"style="width: 280px;">
                        <option value="" selected hidden >room_type</option>
                        <option  value="Standard Room (1 to 2 People)"<?php if ($viewData['booking']->getRoom_type() === 'Standard Room (1 to 2 People)') echo 'selected'; ?> >Standard Room (1 to 2 People)</option>
                        <option value="Family Room (1 to 4 People)"<?php if ($viewData['booking']->getRoom_type() === 'Family Room (1 to 4 People)') echo 'selected'; ?>>Family Room (1 to 4 People)</option>
                        <option value="Private Room (1 to 3 People)"<?php if ($viewData['booking']->getRoom_type() === 'Private Room (1 to 3 People)') echo 'selected'; ?>>Private Room (1 to 3 People)</option>
                        <option value="Mix Dorm Room (6 People)"<?php if ($viewData['booking']->getRoom_type() === 'Mix Dorm Room (6 People)') echo 'selected'; ?>>Mix Dorm Room (6 People)</option>
                        <option value="Female Dorm Room (6 People)"<?php if ($viewData['booking']->getRoom_type() === 'Female Dorm Room (6 People)') echo 'selected'; ?>>Female Dorm Room (6 People)</option>
                        <option value="Male Dorm Room (6 People)"<?php if ($viewData['booking']->getRoom_type() === 'Male Dorm Room (6 People)') echo 'selected'; ?>>Male Dorm Room (6 People)</option>
                    </select>
                   
                      <span class="select-arrow"></span>
                    
                      
                </div>
                </div>
                </div>
           
                <div class="col">
                    <div class="mb-3 row">
                    <label class="col-lg-2 col-md-6 col-sm-12 col-form-label"style="color:black;font-size: 13px; font-weight: bold;">No_of <br>room:</label>
                    <div class="col-lg-10 col-md-6 col-sm-12">
                        <select class="form-control" required name="no_of_room"style="width: 190px;">
                            <option value="" hidden>no_of_room</option>
                            <option value="1" {{ $viewData['booking']->getNo_of_room() == '1' ? 'selected' : '' }}>1</option>
                            <option value="2" {{ $viewData['booking']->getNo_of_room() == '2' ? 'selected' : '' }}>2</option>
                            <option value="3" {{ $viewData['booking']->getNo_of_room() == '3' ? 'selected' : '' }}>3</option>
                            <option value="4" {{ $viewData['booking']->getNo_of_room() == '4' ? 'selected' : '' }}>4</option>
                        </select>
                        
                          <span class="select-arrow"></span>   
                    </div>
                    </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="mb-3 row">
                        <label class="col-lg-2 col-md-6 col-sm-12 col-form-label"style="color:black;font-size: 13px; font-weight: bold;">No_of <br>children:</label>
                        <div class="col-lg-10 col-md-6 col-sm-12">
                            <select class="form-control" required name="no_of_children"style="width: 190px;">
                                <option value="" selected hidden>no of children</option>
                                <option value="0" {{ $viewData['booking']->getNo_of_children() == '0' ? 'selected' : '' }}>0</option>
                                <option value="1" {{ $viewData['booking']->getNo_of_children() == '1' ? 'selected' : '' }}>1</option>
                                <option value="2" {{ $viewData['booking']->getNo_of_children() == '2' ? 'selected' : '' }}>2</option>
                                <option value="3" {{ $viewData['booking']->getNo_of_children() == '3' ? 'selected' : '' }}>3</option>
                                <option value="4" {{ $viewData['booking']->getNo_of_children() == '4' ? 'selected' : '' }}>4</option>
                            </select>
                              <span class="select-arrow"></span>   
                        </div>
                        </div>
                        </div>
                        <div class="col">
                            <div class="mb-3 row">
                            <label class="col-lg-2 col-md-6 col-sm-12 col-form-label"style="color:black;font-size: 13px; font-weight: bold;">No_of <br>adult:</label>
                            <div class="col-lg-10 col-md-6 col-sm-12">
                                <select class="form-control" required name="no_of_adult"style="width: 190px;">
                                    <option value="" selected hidden>no of adult</option>
                                    <option value="1" {{ $viewData['booking']->getNo_of_adult() == '1' ? 'selected' : '' }}>1</option>
                                    <option value="2" {{ $viewData['booking']->getNo_of_adult() == '2' ? 'selected' : '' }}>2</option>
                                    <option value="3" {{ $viewData['booking']->getNo_of_adult() == '3' ? 'selected' : '' }}>3</option>
                                    <option value="4" {{ $viewData['booking']->getNo_of_adult() == '4' ? 'selected' : '' }}>4</option>
                                </select>
                                  <span class="select-arrow"></span>   
                            </div>
                            </div>
                            </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                        <div class="form-group">
                            <input class="form-control" type="date" required name="checkin_date"value="{{ $viewData['booking']->getCheckin_date() }}">
                            <span class="form-label"style="color:black;font-size: 13px; font-weight: bold;">Check In</span>
                        </div>
                        </div>
                        <div class="col-md-6">
                        <div class="form-group">
                            <input class="form-control" type="date" required name="checkout_date" value="{{ $viewData['booking']->getCheckout_date() }}">
                            <span class="form-label" style="color:black;font-size: 13px; font-weight: bold;">Check out</span>
                        </div>
                        </div>
                        </div>
                        <div class="mb-3">
                            <label class="form-label"style="color:black;font-size: 13px; font-weight: bold;">&nbsp;&nbsp;Special_Requests:</label>
                            <textarea class="form-control" name="special_Requests"
                            rows="3" type="text" style="height: 70px;width:800px;margin-left:20px;">{{ $viewData['booking']->getSpecial_Requests() }}</textarea>
                            </div>
  
        <button type="submit" class="btn btn-warning"style="background-color:black;color:rgb(255, 255, 255);width: 90px;margin-top: -10px;">Edit</button>

    </div>
    </form>
    </div>
    </div>
    @endsection