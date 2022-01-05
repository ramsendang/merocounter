<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Bus;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class BookingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request, Bus $bus)
    {
        $userid= session('loggedUser');
        if(session()->has('loggedUser')){
            $user=DB::select("select * from users where id =$userid");
            foreach($user as $users){
                $fname= $users->firstname;
                $lname= $users->lastname;
                $email= $users->email;
                $mobile = $users->mobile;
            }
        }else{
            $fname= null;
            $lname= null;
            $email= null;
            $mobile=null;
        }
        
        $routeid = $bus->route;
        $route=DB::select("select * from routes where id =$routeid");
        foreach($route as $routes){
            $from = $routes->destination_from;
            $to = $routes->destination_to;
        }
        return view('pages.bookingform',[
            'fname' => $fname,
            'lname'=> $lname,
            'email'=> $email,
            'mobile'=>$mobile,
            'bus' => $bus,
            'to'=>$to,
            'from'=>$from,
            'userid'=>$userid
        ]);
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
    public function store(Request $request, Booking $booking)
    {
        $request->validate([
            "fname" =>"required",
            "lname"=>"required",
            "email" => "required",
            "mobile" => "required",
            "from" => "required",
            "to" => "required",
            "busno"=> "required",
            "busname" => "required",
            "price" => "required",
            "totalseat" => "required",
            "date" => "required",
            "time"=>"required",
            "price"=>"required",
        ]);

        $booking->fname = request('fname');
        $booking->lname = request('lname');
        $booking->email = request('email');
        $booking->mobile = request('mobile');
        $booking->destination_from = request('from');
        $booking->destination_to = request('to');
        $booking->busno = request('busno');
        $booking->busname = request('busname');
        $booking->price= request('price');
        $booking->totalseat = request('totalseat');
        $booking->date = request('date');
        $booking->time = request('time');
        $booking->save();
        return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function show(Booking $booking)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function edit(Booking $booking)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Booking $booking)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function destroy(Booking $booking)
    {
        //
    }
}
