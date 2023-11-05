<?php
namespace App\Http\Controllers\Admin;
use App\Models\Comment;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage; 
class AdminCommentController extends Controller
{
public function index()
{
$viewData = [];
$viewData["title"] = "Admin Page - comments - Online Store";
$viewData["comments"] = Comment::all();
return view('admin.comment.index')->with("viewData", $viewData);
}
public function delete($id)
{
Comment::destroy($id);
return back();
}
public function edit($id)
{
$viewData = [];
$viewData["title"] = "Admin Page - Edit Comment - Online Store";
$viewData["comment"] = Comment::findOrFail($id);
return view('admin.comment.edit')->with("viewData", $viewData);
}
public function update(Request $request, $id)
{
$request->validate([
"name" => "required|max:255",
"profession" => "required",
"remarque" => "required",
'image' => 'image',
]);
$comment = Comment::findOrFail($id);
$comment->setName($request->input('name'));
$comment->setProfession($request->input('profession'));
$comment->setRemarque($request->input('remarque'));
if ($request->hasFile('image')) {
$imageName = $comment->getId().".".$request->file('image')->extension();
$path='public/rooms/'.$imageName;

Storage::disk('public')->put($path,
$imageName,
file_get_contents($request->file('image')->getRealPath())
);
$comment->setImage($imageName);
}
$comment->save();
return redirect()->route('admin.comment.index');
}
}