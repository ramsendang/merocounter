<?php

namespace App\Http\Controllers;

use App\Models\Bus;
use App\Models\Route;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BusController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $bus = bus::Paginate(10);
        return view('bus',[
            'bus' => $bus
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('registerbus');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            "busno" =>"required",
            "busname"=>"required",
            "busdriver" => "required",
            "abusdriver" => "required",
            "brand" => "required",
            "busimg" => "required",
            "billbook"=> "required",
            "insurence" => "required",
            "licen" => "required",
            "condition" => "required",
            "totalseat" => "required",
            "status"=>"required"
        ]);

        // for bus imgae
        if($request->hasfile('busimg')){
            $fileNameWithExtbus = $request->file('busimg')->getClientOriginalName();
            $filenamebus = pathinfo($fileNameWithExtbus, PATHINFO_FILENAME);
            $extensionbus = $request->file('busimg')->getClientOriginalExtension();

            $fileNameToStorebus = $filenamebus.'_'.time().'.'.$extensionbus;

            $pathbus = $request->file('busimg')->storeAs('public/images/',$fileNameToStorebus);
        }else{
            $fileNameToStorebus = 'noimage.jpg';
        }

        //for billbook image
        if($request->hasfile('billbook')){
            $fileNameWithExtbillbook = $request->file('billbook')->getClientOriginalName();
            $filenamebillbook = pathinfo($fileNameWithExtbillbook, PATHINFO_FILENAME);
            $extensionbillbook = $request->file('billbook')->getClientOriginalExtension();

            $fileNameToStorebillbook = $filenamebillbook.'_'.time().'.'.$extensionbillbook;

            $pathbilbook = $request->file('billbook')->storeAs('public/images/',$fileNameToStorebillbook);
        }else{
            $fileNameToStorebillbook = 'noimage.jpg';
        }

        //for insurence image
        if($request->hasfile('insurence')){
            $fileNameWithExtinsurence = $request->file('insurence')->getClientOriginalName();
            $filenameinsurence = pathinfo($fileNameWithExtinsurence, PATHINFO_FILENAME);
            $extensioninsurence = $request->file('insurence')->getClientOriginalExtension();

            $fileNameToStoreinsurence = $filenameinsurence.'_'.time().'.'.$extensioninsurence;

            $pathinsurence = $request->file('insurence')->storeAs('public/images/',$fileNameToStoreinsurence);
        }else{
            $fileNameToStoreinsurence = 'noimage.jpg';
        }

        //for licen image
        if($request->hasfile('licen')){
            $fileNameWithExtlicen = $request->file('licen')->getClientOriginalName();
            $filenamelicen = pathinfo($fileNameWithExtlicen, PATHINFO_FILENAME);
            $extensionlicen = $request->file('licen')->getClientOriginalExtension();

            $fileNameToStorelicen = $filenamelicen.'_'.time().'.'.$extensionlicen;

            $pathlicen = $request->file('licen')->storeAs('public/images/',$fileNameToStorelicen);
        }else{
            $fileNameToStorelicen = 'noimage.jpg';
        }

        // for bus condition image
        if($request->hasfile('condition')){
            $fileNameWithExtcondition = $request->file('condition')->getClientOriginalName();
            $filenamecondition = pathinfo($fileNameWithExtcondition, PATHINFO_FILENAME);
            $extensioncondition = $request->file('condition')->getClientOriginalExtension();

            $fileNameToStorecondition = $filenamecondition.'_'.time().'.'.$extensioncondition;

            $pathcondition = $request->file('condition')->storeAs('public/images/',$fileNameToStorecondition);
        }else{
            $fileNameToStorecondition = 'noimage.jpg';
        }

        Bus::create([
            "busno" =>request('busno'),
            "busname"=>request('busname'),
            "busdriver" => request('busdriver'),
            "associatebusdriver" => request('abusdriver'),
            "busbrand" => request('brand'),
            "busimgname" => $fileNameToStorebus,
            "billbookname"=> $fileNameToStorebillbook,
            "insurencename" => $fileNameToStoreinsurence,
            "licenname" => $fileNameToStorelicen,
            "conditonname" => $fileNameToStorecondition,
            "totalseat" => request('totalseat'),
            "status" => request('status')
        ]);

        return redirect('/bus')->with('success', 'bus registered successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Bus  $bus
     * @return \Illuminate\Http\Response
     */
    public function show(Bus $bus, Request $request)
    {  
        $data = Bus::latest();
        if(request('search')){
            $data->where('busno', 'like', '%' .request('search'). '%');
        }
        
        return view('pages.allbus', [
            'data' => $data->get()
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Bus  $bus
     * @return \Illuminate\Http\Response
     */
    public function edit(Bus $bus)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Bus  $bus
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Bus $bus)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Bus  $bus
     * @return \Illuminate\Http\Response
     */
    public function destroy(Bus $bus)
    {
        //
    }

    // search 
    public function search(Request $request){
        $departure_from = request('from');
        $destination_to= request('to');
        $route = DB::select("select * from routes where destination_from ='".$departure_from."' AND 
        destination_to='".$destination_to."'") ;
        if($route !=[]){
            foreach($route as $routedetails){
                $routeid= $routedetails->id;
                $destination_from= $routedetails->destination_from;
                $destination_to= $routedetails->destination_to;
            }
            $searchresult = Bus::get()->where('route', $routeid);
            $from = $destination_from;
            $to = $destination_to;
        }else{
            $searchresult = [];
            $from = 0;
            $to = 0;
        }
        // dd($routeid);
        
        // dd($searchresult);
        return view('availablebuslist', [
            'searchresult' => $searchresult,
            'from'=> $from,
            'to'=>$to
        ]);
    }
    public function assignRoute(Request $request, Bus $bus){
        $route = Route::get()->all();
        return view('pages.asignRoute',[
            'route' => $route,
            'bus' => $bus
        ]);
    }

    public function storeRoute(Request $request, Bus $bus){
        $request->validate([
            "busno" =>"required",
            "busname"=>"required",
            "busdriver" => "required",
            "abusdriver" => "required","brand" => "required","busimg" => "required","billbook"=> "required",
            "insurence" => "required","licen" => "required","condition" => "required","totalseat" => "required",
            "status"=>"required","price"=>"required","date"=>'required',"time"=>'required'
        ]);

        $bus->id = request('id');
        $bus->busno = request('busno');
        $bus->busname= request('busname');
        $bus->busdriver = request('busdriver');
        $bus->associatebusdriver = request('abusdriver');
        $bus->busbrand = request('brand');
        $bus->busimgname = request('busimg');
        $bus->billbookname = request('billbook');
        $bus->insurencename = request('insurence');
        $bus->licenname = request('licen');
        $bus->conditonname = request('condition');
        $bus->totalseat = request('totalseat');
        $bus->status = request('status');
        $bus->route = request('route');
        $bus->price = request('price');
        $bus->routedate= request('date');
        $bus->routetime= request('time');
        $bus->save();
        return redirect('/bus');
    }

}
