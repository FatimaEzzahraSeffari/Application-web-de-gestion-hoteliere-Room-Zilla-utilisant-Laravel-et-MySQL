<?php
namespace App\Http\Controllers\Admin;
use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage; 
class AdminUserController extends Controller
{
public function index()
{
$viewData = [];
$viewData["title"] = "Admin Page - users - Online Store";
$viewData["users"] = User::all();
return view('admin.user.index')->with("viewData", $viewData);
}
public function delete($id)
{
User::destroy($id);
return back();
}
public function edit($id)
{
$viewData = [];
$viewData["title"] = "Admin Page - Edit User - Online Store";
$viewData["user"] = User::findOrFail($id);
return view('admin.user.edit')->with("viewData", $viewData);
}
public function update(Request $request, $id)
{
$request->validate([
"name" => "required|max:255",
"email" => "required",
"password" => "required",


]);
$user = User::findOrFail($id);
$user->setName($request->input('name'));
$user->setEmail($request->input('email'));
$user->setPassword($request->input('password'));



$user->save();
return redirect()->route('admin.user.index');
}
}