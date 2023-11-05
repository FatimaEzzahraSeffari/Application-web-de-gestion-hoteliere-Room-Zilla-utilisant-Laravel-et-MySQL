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
        <h1>Send Your Message</h1>
    </div>
    

@if($errors->any())
    <ul class="alert alert-danger list-unstyled">
    @foreach($errors->all() as $error)
    <li>- {{ $error }}</li>
    @endforeach
    </ul>
    @endif
    <form method="POST" enctype="multipart/form-data" action="{{ route('contact.store') }}">
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
        <div class="col-md-4">
        <div class="form-group">
            <select class="form-control" required name="gender">
                <option value="" selected hidden>Gender</option>
                
                <option value="male">male</option>
                <option value="female">female</option>
                <option value="other">other</option>
                
            </select>
            <span class="select-arrow"></span>
            <span class="form-label">Gender</span>
        </div>
        </div>
        <div class="col-md-12">
        <div class="form-group">
            <input class="form-control" type="text" placeholder="Your Message" name="message" style="height:100px;width:670px;">
            <span class="form-label">Message</span>
            </div>
<center><div class="form-btn">
<button class="submit-btn" style="background-color:#FEA116  ">Send Now</button>
</center>
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

