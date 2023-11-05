<?php

namespace App\Http\Controllers;
use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
class ContactController extends Controller
{
    public function index(){
        
            $viewData = [];
            $viewData["title"] = "Admin Page - Contacts - Online Store";
            $viewData["contacts"] = Contact::all();
            return view('contact.index')->with("viewData", $viewData);
            
}

        public function store(Request $request)
{
$request->validate([
"name" => "required|max:255",
"email" => "required",
"phone" => "required",
"country"=> "required",
"gender"=> "required",
"message"=> "required",
]);
$newcontact = new Contact();
$newcontact->setName($request->input('name'));
$newcontact->setEmail($request->input('email'));
$newcontact->setPhone($request->input('phone'));
$newcontact->setCountry($request->input('country'));
$newcontact->setGender($request->input('gender'));
$newcontact->setMessage($request->input('message'));

$newcontact->save();
return back();
}

}
