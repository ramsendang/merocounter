<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;


class UserController extends Controller
{
    public function index(){
        return view('pages.login');
    }

    public function login(Request $request){
        $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        $user= User::where('email', '=', $request->email)->first();
        if($user){
            if(Hash::check($request->password, $user->password)){
                $request->session()->put('loggedUser', $user->id);
                return redirect('/');
            }else{
                return back()->withErrors([
                    'fail' => 'Password does not matches.',
                ]);
            }
        }
        else{
            return back()->withErrors([
                'fail' => 'This email is not registered',
            ]);
        }

    }
    public function getregisterpage(){
        return view('pages.register');
    }

    public function register(Request $request){
        $request->validate([
            'firstname' =>'required',
            'lastname' =>'required',
            'email'=>'required|email',
            'mobile' => 'required',
            'password'=>'required',
            'gender' =>'required',
            'terms'=>'required'
        ]);

        $password = request('password');
        $hashpassword = Hash::make($password);
        $user = new User;
        $user->firstname = request('firstname');
        $user->lastname = request('lastname');
        $user->email = request('email');
        $user->mobile = request('mobile');
        $user->password = $hashpassword;
        $user->gender = request('gender');
        $user->terms = request('terms');
        $user->save();
        return redirect('/login');
        
    }

    public function logout(){
        if(session()->has('loggedUser')){
            session()->pull('loggedUser');
            return redirect ('/');
        }
    }
}
