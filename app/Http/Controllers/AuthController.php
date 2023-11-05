<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function index()
    {
        return view('auth.login');
    }

    // public function login(Request $request){
    //     // validate data 
    //     $request->validate([
    //         'email' => 'required',
    //         'password' => 'required'
    //     ]);

    //     // login code 
        
    //     if(Auth::attempt($request->only('email','password'))){
    //         return redirect('home');
    //     }

    //     return redirect('login')->withError('Login details are not valid');

    // }
    public function login(Request $request)
    {
        // validate data
        $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);
    
        // login code
        if (Auth::attempt($request->only('email', 'password'))) {
            $user = Auth::user();
            if ($user->email === 'admin@gmail.com') {
                return redirect('/admin'); // Redirect to the admin page
            } else {
                return redirect('/'); // Redirect to the normal user page
            }
        }
    
        return redirect('login')->withError('Login details are not valid');
    }
    
    public function register_view()
    {
        return view('auth.register');
    }

    public function register(Request $request){
        // validate 
        $request->validate([
            'name'=>'required',
            'email' => 'required|unique:users|email',
            'password'=>'required|confirmed'
        ]);

        // save in users table 
        
        User::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'password'=> Hash::make($request->password)
        ]);

        // login user here 
        
        if(Auth::attempt($request->only('email','password'))){
            return redirect('/');
        }

        return redirect('register')->withError('Error');


    }
    // public function home(){
    //     return view('home');
    // }
    // public function home2(){
    //     return view('home2');
    // }
    public function logout(){
        Session::flush();
        Auth::logout();
        return redirect('');
    }
    
}
