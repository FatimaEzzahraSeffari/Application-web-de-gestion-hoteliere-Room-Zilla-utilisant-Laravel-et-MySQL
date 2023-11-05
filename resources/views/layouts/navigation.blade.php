@if (Route::has('login'))
    <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
        @auth
        
            <div class="container-fluid bg-dark px-0">
           
           
                    
                    <nav class="navbar navbar-expand-lg bg-dark navbar-dark p-3 p-lg-0">
                        <a href="index.html" class="navbar-brand d-block d-lg-none">
                            <h1 class="m-0 text-primary text-uppercase">RoomZilla</h1>
                        </a>
                        <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse" style=" margin-left:450px">
                            <div class="navbar-nav mr-auto py-0">
                                <a href="/" class="nav-item nav-link active">Home</a>
                                
                                <a href="/services" class="nav-item nav-link">Services</a>
                                <a href="/rooms" class="nav-item nav-link">Rooms</a>
                                <div class="nav-item dropdown">
                                    <a href="/" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Options</a>
                                    <div class="dropdown-menu rounded-0 m-0">
                                        <a href="/bookings" class="dropdown-item">Booking</a>
                                        <a href="/teams" class="dropdown-item">Our Team</a>
                                        <a href="/comments" class="dropdown-item">Comment</a>
                                    </div>
                                    
                                </div>
                                
                                <a href="/about" class="nav-item nav-link">About</a>
                            
    
           
            <a href="{{ route('logout') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Logout</a>
        </div>
        @else
            <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Login</a>&emsp;

            @if (Route::has('register'))
                <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
            @endif
        @endauth
    </div>
@endif