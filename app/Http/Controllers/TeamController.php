<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Team;
class TeamController extends Controller
{

public function index()
{
    $viewData = [];
    $viewData["title"] = "Teams - Online Store";
    $viewData["subtitle"] = "List of teams";
    $viewData["teams"] = Team::all();
    return view('team.index')->with("viewData", $viewData);
}
public function show($id)
{
    $viewData = [];
    $team = Team::findOrFail($id);
    $viewData["title"] = $team["name"]." - Online Store";
    $viewData["subtitle"] = $team["name"]." - Team information";
    $viewData["team"] = $team;
    return view('team.show')->with("viewData", $viewData);
}
}