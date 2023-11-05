

@extends('layouts.admin')

@section('title', $viewData["title"])

@section('content')
<br><br><br>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css">

<div class="col-md-9"><!-- CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet">
    
    <!-- JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"></script>
    
    <div class="table-container" style="width:130%; overflow-x: auto;">
        <div class="card" >
    {{-- <div class="table-container" style="width: 1550px;">
        <div class="card"> --}}
            <div class="card-header" style="font-size: 24px; font-weight: bold;">
                Manage Booking
            </div>
            <div class="card-body">
                
                <div class="table-responsive">
                    <table class="table  table-striped">
                       
                        <thead>
                            <tr>
                                <th style="color: black;font-size: 18px; font-weight: bold;">ID</th>
                                <th style="color: black;font-size: 18px; font-weight: bold;">Name</th>
                                <th style="color: black;font-size: 18px; font-weight: bold;">Email</th>
                                <th style="color: black;font-size: 18px; font-weight: bold;">Phone</th>
                                <th style="color: black;font-size: 18px; font-weight: bold;">Country</th>
                                <th style="color: black;font-size: 18px; font-weight: bold;">Room Type</th>
                                <th style="color: black;font-size: 18px; font-weight: bold;">No.of Rooms</th>
                                <th style="color: black;font-size: 18px; font-weight: bold;">No.of Children</th>
                                <th style="color: black;font-size: 18px; font-weight: bold;">No.of Adults</th>
                                <th style="color: black;font-size: 18px; font-weight: bold;">Check-in Date</th>
                                <th style="color: black;font-size: 18px; font-weight: bold;">Check-out Date</th>
                                <th style="color: black;font-size: 18px; font-weight: bold;">Special Requests</th>
                                <th   style="color:rgb(14, 13, 13);font-size: 18px; font-weight: bold;"> &nbsp; &emsp; Actions</th>

                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($viewData["bookings"] as $booking)
                            <tr>
                                <td style="color: black;">{{ $booking->id }}</td>
                                <td style="color: black;">{{ $booking->name }}</td>
                                <td style="color: black;">{{ $booking->email }}</td>
                                <td style="color: black;">{{ $booking->phone }}</td>
                                <td style="color: black;">{{ $booking->country }}</td>
                                <td style="color: black;">{{ $booking->room_type }}</td>
                                <td style="color: black;">{{ $booking->no_of_room }}</td>
                                <td style="color: black;">{{ $booking->no_of_children }}</td>
                                <td style="color: black;">{{ $booking->no_of_adult }}</td>
                                <td style="color: black;">{{ $booking->checkin_date }}</td>
                                <td style="color: black;">{{ $booking->checkout_date }}</td>
                                <td style="color: black;">{{ $booking->special_Requests }}</td>
                                <td>
                          
                                    <a class="btn btn-primary" href="{{ route('admin.booking.edit', ['id' => $booking->getId()]) }}" style="height: 40px; width: 50px;">
                                        <i class="bi-pencil"></i>
                                    </a>
                                    
                                    &nbsp; &nbsp; 
                                   
                                <form action="{{ route('admin.booking.delete', $booking->getId())}}"
                                    method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger" style="height: 40px; width: 50px;"onclick="return confirm('{{ __('Are you sure you want to delete?') }}')">
                                    <i class="bi-trash"></i>
                                    </button>
                                    </form>
                                    </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
