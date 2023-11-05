<?php
namespace App\Http\Controllers\Admin;
use App\Models\Room;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage; 
class AdminRoomController extends Controller
{
public function index()
{
$viewData = [];
$viewData["title"] = "Admin Page - Rooms - Online Store";
$viewData["rooms"] = Room::all();
return view('admin.room.index')->with("viewData", $viewData);
}
public function store(Request $request)
{
$request->validate([
"name" => "required|max:255",
"description" => "required",
"price" => "required|numeric|gt:0",
'image' => 'image',
]);
$newRoom = new Room();
$newRoom->setName($request->input('name'));
$newRoom->setDescription($request->input('description'));
$newRoom->setPrice($request->input('price'));
$newRoom->setImage("game.png");
$newRoom->save();
if ($request->hasFile('image')) {
    $imageName = $newRoom->getId().".".$request->file('image')->extension();
    Storage::disk('public')->put(
        'public/rooms/'.$imageName,
    file_get_contents($request->file('image')->getRealPath())
    );
    $newRoom->setImage($imageName);
    $newRoom->save();
    }
return back();
}
public function delete($id)
{
Room::destroy($id);
return back();
}
public function edit($id)
{
$viewData = [];
$viewData["title"] = "Admin Page - Edit Room - Online Store";
$viewData["room"] = Room::findOrFail($id);
return view('admin.room.edit')->with("viewData", $viewData);
}
public function update(Request $request, $id)
{
$request->validate([
"name" => "required|max:255",
"description" => "required",
"price" => "required|numeric|gt:0",
'image' => 'image',
]);
$room = Room::findOrFail($id);
$room->setName($request->input('name'));
$room->setDescription($request->input('description'));
$room->setPrice($request->input('price'));
if ($request->hasFile('image')) {
$imageName = $room->getId().".".$request->file('image')->extension();

$path='public/rooms/'.$imageName;

Storage::disk('public')->put($path,

file_get_contents($request->file('image')->getRealPath())
);
$room->setImage($imageName);
}
$room->save();
return redirect()->route('admin.room.index');
}

}