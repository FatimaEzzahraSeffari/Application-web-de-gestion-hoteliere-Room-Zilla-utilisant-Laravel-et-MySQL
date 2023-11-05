<link href="css/booking.css" rel="stylesheet">
<link href='https://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css' rel='stylesheet'>
<link href='' rel='stylesheet'>

<script type='text/javascript' src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
<script type='text/javascript' src='https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js'></script>
<script type='text/javascript' src='https://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js'></script>
<script type='text/javascript'></script> 
<div id="booking" class="section">

<div class="section-center">

<div class="container">
    
<div class="row">
    
<div class="booking-form">

    <div class="form-header">
        <img src="img/r6.png" alt="image" style="width: 100px; float: left; margin-right: 10px;margin-top: -55px;">
        <h1>Make your reservation</h1>
    </div>
    
@if($errors->any())
    <ul class="alert alert-danger list-unstyled">
    @foreach($errors->all() as $error)
    <li>- {{ $error }}</li>
    @endforeach
    </ul>
    @endif
    
    <form method="POST" enctype="multipart/form-data" action="{{ route('booking.store') }}">
        @csrf
<form>

    <div class="form-group">
        
        <input class="form-control" type="text" placeholder="Your Name" name="name">
        <span class="form-label">Name</span>
        </div>
        <div class="row">
            <div class="col-md-6">
            <div class="form-group">
                <input class="form-control" type="email" placeholder="Enter your Email" name="email">
                <span class="form-label">Email</span>
            </div>
            </div>
            <div class="col-md-6">
            <div class="form-group">
                <input class="form-control" type="tel" placeholder="Enter you Phone" name="phone">
                <span class="form-label">Phone</span>
            </div>
            </div>
            </div>
<div class="form-group">
<input class="form-control" type="text" placeholder="Country, ZIP, city..." name="country">
<span class="form-label">Country</span>
</div>

    <div class="row">
        <div class="col-md-6"> 
        <div class="form-group">
          
                <select class="form-control"required name="room_type">
                <option value="" selected hidden >room_type</option>
                <option  value="Standard Room (1 to 2 People)" >Standard Room (1 to 2 People)</option>
                <option value="Family Room (1 to 4 People)">Family Room (1 to 4 People)</option>
                <option value="Private Room (1 to 3 People)">Private Room (1 to 3 People)</option>
                <option value="Mix Dorm Room (6 People)">Mix Dorm Room (6 People)</option>
                <option value="Female Dorm Room (6 People)">Female Dorm Room (6 People)</option>
                <option value="Male Dorm Room (6 People)">Male Dorm Room (6 People)</option>
            </select>
            <span class="select-arrow"></span>
            <span class="form-label">Room_type</span>
        </div>
        </div>
    </div>
  
    <div class="row">
        <div class="col-md-4">
        <div class="form-group">
            <select class="form-control" required name="no_of_room">
                <option value="" selected hidden>no of rooms</option>
                
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
            </select>
            <span class="select-arrow"></span>
            <span class="form-label">Rooms</span>
        </div>
        </div>
        <div class="col-md-4">
        <div class="form-group">
            <select class="form-control" required name="no_of_adult">
                <option value="" selected hidden>no of adults</option>
                <option value="1" >1</option>
                <option value="2" >2</option>
                <option value="3" >3</option>
                <option value="4" >4</option>
            </select>
            <span class="select-arrow"></span>
            <span class="form-label">Adults</span>
        </div>
        </div>
        <div class="col-md-4">
        <div class="form-group">
            <select class="form-control" required name="no_of_children">
                <option value="" selected hidden>no of children</option>
                <option value="0">0</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
            </select>
            <span class="select-arrow"></span>
            <span class="form-label">Children</span>
        </div>
        </div>
        </div>
<div class="row">
<div class="col-md-6">
<div class="form-group">
    <input class="form-control" type="date" required name="checkin_date">
    <span class="form-label" style="color: #FEA116 ;">Check In</span>
</div>
</div>
<div class="col-md-6">
<div class="form-group">
    <input class="form-control" type="date" required name="checkout_date">
    <span class="form-label" style="color: #FEA116 ;">Check out</span>
</div>
</div>
</div>
<div class="form-group">
    <input class="form-control" type="text" placeholder="special_Requests" name="special_Requests">
    <span class="form-label">Special_Requests</span>
    </div>

<div class="form-btn">
    <button id="bookingBtn" class="submit-btn" style="background-color: #FEA116;">Book Now</button>
</div>

    
<div class="col-8 text-left">
    <a href="/" class="btn btn-link" style="color: #ffffff; font-size: 20px; display: inline-block; float: left;">Go to the home</a>
  </div>
 
</form>
</div>
</div>
</div>
</div>
</div> 

