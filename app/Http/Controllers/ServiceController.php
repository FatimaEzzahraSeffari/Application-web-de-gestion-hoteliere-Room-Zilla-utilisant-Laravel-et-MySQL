<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Service;
class ServiceController extends Controller
{
public function index()
{
    $viewData = [];
    $viewData["title"] = "Services - Online Store";
    $viewData["subtitle"] = "List of services";
    $viewData["services"] = Service::all();
    return view('service.index')->with("viewData", $viewData);
}
public function show($id)
{
    $viewData = [];
    $service = Service::findOrFail($id);
    $viewData["title"] = $service["name"]." - Online Store";
    $viewData["subtitle"] = $service["name"]." -Service information";
    $viewData["service"] = $service;
    return view('service.show')->with("viewData", $viewData);
}
}