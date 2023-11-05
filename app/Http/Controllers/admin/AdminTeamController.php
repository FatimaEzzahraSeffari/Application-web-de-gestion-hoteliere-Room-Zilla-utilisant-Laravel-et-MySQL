<?php
namespace App\Http\Controllers\Admin;
use App\Models\Team;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
class AdminTeamController extends Controller
{
public function index()
{
$viewData = [];
$viewData["title"] = "Admin Page - Teams - Online Store";
$viewData["teams"] = Team::all();
return view('admin.team.index')->with("viewData", $viewData);
}
public function store(Request $request)
{
$request->validate([
"name" => "required|max:255",
"profession" => "required|max:255",
'image' => 'image',
]);
$newTeam = new Team();
$newTeam->setName($request->input('name'));
$newTeam->setProfession($request->input('profession'));
$newTeam->setImage("game.png");
$newTeam->save();

if ($request->hasFile('image')) {
$imageName = $newTeam->getId().".".$request->file('image')->extension();
Storage::disk('public')->put(
    'public/teams/'.$imageName,
file_get_contents($request->file('image')->getRealPath())
);
$newTeam->setImage($imageName);
$newTeam->save();
}
return back();

}
public function delete($id)
{
Team::destroy($id);
return back();
}
public function edit($id)
{
$viewData = [];
$viewData["title"] = "Admin Page - Edit Team - Online Store";
$viewData["team"] = Team::findOrFail($id);
return view('admin.team.edit')->with("viewData", $viewData);
}
public function update(Request $request, $id)
{
$request->validate([
"name" => "required|max:255",
"profession" => "required",
'image' => 'image',
]);
$team = Team::findOrFail($id);
$team->setName($request->input('name'));
$team->setProfession($request->input('profession'));
if ($request->hasFile('image')) {
$imageName = $team->getId().".".$request->file('image')->extension();
$path='public/teams/'.$imageName;

Storage::disk('public')->put($path,
$imageName,
file_get_contents($request->file('image')->getRealPath())
);
$team->setImage($imageName);
}
$team->save();
return redirect()->route('admin.team.index');
}
}
