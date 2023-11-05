 <link href="css/comment.css" rel="stylesheet"> 
{{-- Ajouter ici le formulaire d'ajout de produit--}}

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
<div class="container">
    <div class="row">

        <div class="col-md-4 offset-md-4">
            <div class="card form-holder">
                <div class="card-body">
                    

    <div class="card-body">
    @if($errors->any())
    <ul class="alert alert-danger list-unstyled">
    @foreach($errors->all() as $error)
    <li>- {{ $error }}</li>
    @endforeach
    </ul>
    @endif
    <div class="form-items white-border">
    <form method="POST" enctype="multipart/form-data" action="{{ route('comment.store') }}">
        @csrf
        @method('post')
        <div class="row">
            <div class="col-md-6">
        <div class="form-body">
            <div class="row">
              
                <div class="form-holder" >
                    
                    <div class="form-content">
                        
                        <div class="form-items">
                            <div class="content" >
                                <img src="img/r6.png" alt="image"style="width: 100px;margin-right:1110px;">
                        <form class="requires-validation" novalidate>
                            <center> <h1 style="color: #FEA116 ;font-size:35px; text-decoration: underline;"style="color: orangered">Give a Feedback </h1></center>
                                <br>
                                <div class="col-md-12">
                                    <div class="form-control"style="margin-bottom: 520px;">
                                      
                                       <div class="form-group" >
                                           
                                           <center>
            
    <div class="row">
    <div class="col"><div class="mb-3 row">
        <div class="form-group">
            <center>
    <label class="col-lg-2 col-md-6 col-sm-12 col-form-label">Name:</label>
    <div class="col-lg-10 col-md-6 col-sm-12">
    <input name="name" value="{{ old('name') }}" type="text" class="form-control" style="background-color: #ffffff;border-radius: 100px;height:50px;width:470px; ">
    </div></div></div>
</center> 
<div class="form-group">
    <center>
    <div class="col"><div class="mb-3 row">
        <label class="col-lg-2 col-md-6 col-sm-12 col-form-label">Work:</label>
        <div class="col-lg-10 col-md-6 col-sm-12">
        <input name="profession" value="{{ old('profession') }}" type="text" class="form-control" style="background-color: #ffffff;border-radius: 100px;height:50px;width:470px; ">
      
    </center>
<br>
    <div class="form-group">
        <center>
    <div class="col">
    <div class="mb-3 row">
    <label class="form-label">Comment :</label>
   
    <div class="col-lg-10 col-md-6 col-sm-12">
        <br> 
    <textarea class="form-control" name="remarque" rows="3" style="background-color: #ffffff;border-radius: 100px;height:100px;width:470px; color:black;">{{ old('remarque') }}</textarea>
    </div>

</center>
<div class="form-group">
    <center>
    <div class="row">
        <div class="col">
        <div class="mb-3 row">
            
        <label class="col-lg-2 col-md-6 col-sm-12 col-form-label" class="mb-0">Image:</label>
        
        <div class="col-lg-10 col-md-6 col-sm-12">

            <br>
        <input class="form-control" type="file" name="image" style="font-size:100%;">
        </div>
        </div>
        </div>
    </div>
        <div class="col">
        &nbsp;
        </div>
        </div>
    </center>
    <button type="submit" class="btn btn-primary"style="height: 50px; width: 250px;background-color:#FEA116 ;color: white;">Submit</button>
    
    <div class="col-8 text-left">
        <a href="/" class="btn btn-link" style="color: #ffffff; font-size: 20px; display: inline-block; float: left;">Go to the home</a>
      </div>
    </form>
</div>
</div> 