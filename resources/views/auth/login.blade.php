<link href="css/styles.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
<div class="container">
    <div class="row">

        <div class="col-md-4 offset-md-4">
            <div class="card form-holder">
                <div class="card-body">
                    

                    @if (Session::has('error'))
                        <p class="text-danger">{{ Session::get('error') }}</p>
                    @endif
                    @if (Session::has('success'))
                        <p class="text-success">{{ Session::get('success') }}</p>
                    @endif
                   
                    
                              
                    <div class="form-items white-border">
                    <form action="{{ route('login') }}" method="post">
                        @csrf
                        @method('post')
                        
                        <div class="row">
                            <div class="col-md-6">
                        <div class="form-body">
                            <div class="row">
                              
                                <div class="form-holder" >
                                    
                                    <div class="form-content">
                                        
                                        <div class="form-items">
                                            {{-- <div class="bg-img"> --}}
                                                <div class="content" >
                                                    <img src="img/r6.png" alt="image"style="width: 100px;margin-right:1110px;">
                                            <form class="requires-validation" novalidate>
                                                <center> <h1 style="color: #FEA116 ;font-size:30px; text-decoration: underline;">Login</h1></center>
                                                <br>
                    <div class="col-md-12">
                     <div class="form-control"style="margin-bottom: 520px;">
                       
                        <div class="form-group" >
                            
                            <center>
                                
                            <input type="email" name="email" class="form-control" placeholder="Entre Your Email" style="background-color: #ffffff;border-radius: 100px;height:50px;width:470px;color:blanchedalmond "/>
                            @if ($errors->has('email'))
                                <p class="text-danger">{{ $errors->first('email') }}</p>
                            @endif
                        </div>
                    </center>
                        <div class="form-group">
                            <center>
                            <input type="password" name="password" class="form-control" placeholder="Entre Your Password" style="background-color: #ffffff;border-radius: 100px;height:50px;width:470px;"/>
                            @if ($errors->has('password'))
                                <p class="text-danger">{{ $errors->first('password') }}</p>
                            @endif
                        </div>
                    </center>
                    <br>
                        <div class="row">
                            
                            <br>
                            <center>
                            <div class="col-4 text-right">
                                <input type="submit" class="btn btn-primary"style="height: 50px; width: 250px;background-color:#FEA116 ;color: white;" value=" Login " />
                            </div>
                            
                        </center>
                        <br>
                        <div class="col-8 text-left">
                            <a href="#" class="btn btn-link" style="color: #ffffff;font-size:20px;">Forgot Password</a>
                        </div>
                        </div>
                    </form>
                </div>
                </div>
            </div>
        </div>
    </div>
</div>