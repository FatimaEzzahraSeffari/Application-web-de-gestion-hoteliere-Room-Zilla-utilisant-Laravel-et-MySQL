<?php

namespace App\Http\Controllers;
use App\Models\Booking;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
class BookingController extends Controller
{
    public function index(){
        
            $viewData = [];
            $viewData["title"] = "Admin Page - Bookings - Online Store";
            $viewData["bookings"] = Booking::all();
            return view('booking.index')->with("viewData", $viewData);
            
}

        public function store(Request $request)
{
$request->validate([
"name" => "required|max:255",
"email" => "required",
"phone" => "required",
"country"=> "required",
"room_type" => "required",
"no_of_room" => "required",
"no_of_children" => "required",
"no_of_adult"=> "required",
"checkin_date" => "required",
"checkout_date"=> "required",
"special_Requests"=> "required",
]);
$newBooking = new Booking();
$newBooking->setName($request->input('name'));
$newBooking->setEmail($request->input('email'));
$newBooking->setPhone($request->input('phone'));
$newBooking->setCountry($request->input('country'));
$newBooking->setRoom_type($request->input('room_type'));
$newBooking->setNo_of_room($request->input('no_of_room'));
$newBooking->setNo_of_children($request->input('no_of_children'));
$newBooking->setNo_of_adult($request->input('no_of_adult'));
$newBooking->setCheckin_date($request->input('checkin_date'));
$newBooking->setCheckout_date($request->input('checkout_date'));
$newBooking->setSpecial_Requests($request->input('special_Requests'));

$newBooking->save();
return back();
}

}


