<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Room;
class RoomController extends Controller
{

public function index()
{
$viewData = [];
$viewData["title"] = "Rooms - Online Store";
$viewData["subtitle"] = "List of rooms";
$viewData["rooms"] = Room::all();
return view('room.index')->with("viewData", $viewData);
}
public function show($id)
{
$viewData = [];
$room= Room::findOrFail($id);
$viewData["title"] = $room["name"]." - Online Store";
$viewData["subtitle"] = $room["name"]." - Roominformation";
$viewData["room"] = $room;
return view('room.show')->with("viewData", $viewData);
}

}