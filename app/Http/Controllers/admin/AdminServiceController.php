<?php
namespace App\Http\Controllers\Admin;
use App\Models\Service;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
class AdminServiceController extends Controller
{
public function index()
{
$viewData = [];
$viewData["title"] = "Admin Page - Services - Online Store";
$viewData["services"] = Service::all();
return view('admin.service.index')->with("viewData", $viewData);
}
public function store(Request $request)
{
$request->validate([
"name" => "required|max:255",
"description" => "required",

]);
$newService = new Service();
$newService->setName($request->input('name'));
$newService->setDescription($request->input('description'));

$newService->save();
return back();
}

public function delete($id)
{
Service::destroy($id);
return back();
}
public function edit($id)
{
$viewData = [];
$viewData["title"] = "Admin Page - Edit Service - Online Store";
$viewData["service"] = Service::findOrFail($id);
return view('admin.service.edit')->with("viewData", $viewData);
}
public function update(Request $request, $id)
{
$request->validate([
"name" => "required|max:255",
"description" => "required",

]);
$service = Service::findOrFail($id);
$service->setName($request->input('name'));
$service->setDescription($request->input('description'));

$service->save();
return redirect()->route('admin.service.index');
}
}