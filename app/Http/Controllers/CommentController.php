<?php

namespace App\Http\Controllers;
use App\Models\Comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
class CommentController extends Controller
{
    public function index1(){
        
            $viewData = [];
            $viewData["title"] = "Admin Page - Comments - Online Store";
            $viewData["comments"] = Comment::all();
            return view('comment.index')->with("viewData", $viewData);
            
}
public function index2()
{
$viewData = [];
$viewData["title"] = "Comments - Online Store";
$viewData["subtitle"] = "List of rooms";
$viewData["comments"] = Comment::all();
return view('home.index')->with("viewData", $viewData);
}
        
        public function store(Request $request)
{
$request->validate([
"name" => "required|max:255",
"remarque" => "required",
"profession" => "required|max:255",
'image' => 'image',
]);
$newComment = new Comment();
$newComment->setName($request->input('name'));
$newComment->setRemarque($request->input('remarque'));
$newComment->setProfession($request->input('profession'));
$newComment->setImage("game.png");
$newComment->save();
if ($request->hasFile('image')) {
    $imageName = $newComment->getId().".".$request->file('image')->extension();
    Storage::disk('public')->put(
        'public/comments/'.$imageName,

    file_get_contents($request->file('image')->getRealPath())
    );
    $newComment->setImage($imageName);
    $newComment->save();
    }
return back();
}

}


