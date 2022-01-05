<?php

namespace App\Http\Controllers;

use App\Models\Vendor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;

class VendorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('vendorlogin');
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        $vendor= Vendor::where('email', '=', $request->email)->first();
        if($vendor){
            if(Hash::check($request->password, $vendor->password)){
                $request->session()->put('loggedVendor', $vendor->id);
                return redirect('/dashbord');
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

    public function register()
    {
        return view('vendorRegister');
    }

    public function registerSave(Request $request)
    {
        $request->validate([
            'firstname' =>'required',
            'lastname' =>'required',
            'companyname'=>'required',
            'email'=>'required|email',
            'mobile' => 'required',
            'password'=>'required',
            'gender' =>'required',
            'terms'=>'required'
        ]);

        $password = request('password');
        $hashpassword = Hash::make($password);
        $vendor = new Vendor;
        $vendor->firstname = request('firstname');
        $vendor->lastname = request('lastname');
        $vendor->companyname = request('companyname');
        $vendor->email = request('email');
        $vendor->mobile = request('mobile');
        $vendor->password = $hashpassword;
        $vendor->gender = request('gender');
        $vendor->terms = request('terms');
        $vendor->save();

        return redirect('/');
    }

    public function logout(Request $request){
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/vendorlogin');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Vendor  $vendor
     * @return \Illuminate\Http\Response
     */
    public function show(Vendor $vendor)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Vendor  $vendor
     * @return \Illuminate\Http\Response
     */
    public function edit(Vendor $vendor)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Vendor  $vendor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Vendor $vendor)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Vendor  $vendor
     * @return \Illuminate\Http\Response
     */
    public function destroy(Vendor $vendor)
    {
        //
    }
}
