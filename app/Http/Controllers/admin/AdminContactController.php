<?php
namespace App\Http\Controllers\Admin;
use App\Models\Contact;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage; 
class AdminContactController extends Controller
{
public function index()
{
$viewData = [];
$viewData["title"] = "Admin Page - contacts- Online Store";
$viewData["contacts"] = Contact::all();
return view('admin.contact.index')->with("viewData", $viewData);
}
public function delete($id)
{
Contact::destroy($id);
return back();
}
public function edit($id)
{
$viewData = [];
$viewData["title"] = "Admin Page - Edit Contact - Online Store";
$viewData["contact"] = Contact::findOrFail($id);
return view('admin.contact.edit')->with("viewData", $viewData);
}
public function update(Request $request, $id)
{
$request->validate([
"name" => "required|max:255",
"email" => "required",
"phone" => "required",
"country" => "required",
"gender" => "required",
"message" => "required",

]);
$contact = Contact::findOrFail($id);
$contact->setName($request->input('name'));
$contact->setEmail($request->input('email'));
$contact->setPhone($request->input('phone'));
$contact->setCountry($request->input('country'));
$contact->setGender($request->input('gender'));
$contact->setMessage($request->input('message'));


$contact->save();
return redirect()->route('admin.contact.index');
}
}