<?php
namespace App\Http\Controllers\Admin;
use App\Models\Booking;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage; 
class AdminBookingController extends Controller
{
public function index()
{
$viewData = [];
$viewData["title"] = "Admin Page - Bookings - Online Store";
$viewData["bookings"] = Booking::all();
return view('admin.booking.index')->with("viewData", $viewData);
}

public function delete($id)
{
Booking::destroy($id);
return back();
}
public function edit($id)
{
$viewData = [];
$viewData["title"] = "Admin Page - Edit Booking - Online Store";
$viewData["booking"] = Booking::findOrFail($id);
return view('admin.booking.edit')->with("viewData", $viewData);
}
public function update(Request $request, $id)
{
$request->validate([
"name" => "required|max:255",
"email" => "required",
"phone" => "required",
"country" => "required",
"room_type" => "required",
"no_of_room" => "required",
"no_of_children" => "required",
"no_of_adult" => "required",
"checkin_date" => "required",
"checkout_date" => "required",
"special_Requests" => "required",

]);
$booking = Booking::findOrFail($id);
$booking->setName($request->input('name'));
$booking->setEmail($request->input('email'));
$booking->setPhone($request->input('phone'));
$booking->setCountry($request->input('country'));
$booking->setRoom_type($request->input('room_type'));
$booking->setNo_of_room($request->input('no_of_room'));
$booking->setNo_of_children($request->input('no_of_children'));
$booking->setNo_of_adult($request->input('no_of_adult'));
$booking->setCheckin_date($request->input('checkin_date'));
$booking->setCheckout_date($request->input('checkout_date'));
$booking->setSpecial_Requests($request->input('special_Requests'));


$booking->save();
return redirect()->route('admin.booking.index');
}
}