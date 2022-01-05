<?php

namespace App\Http\Controllers;

use App\Models\Route;
use Illuminate\Http\Request;

class RouteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $route = Route::all();
        return view('busroutes', [
            'route' => $route
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.addroutes');
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
            'departure_time' =>'required',
            'destination_from'=>'required',
            'destination_to'=>'required'
        ]);
        $route = new Route;
        $route->departure_time = request('departure_time');
        $route->destination_from = request('destination_from');
        $route->destination_to = request('destination_to');
        $route->save();
        return redirect('/busroutes');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Route  $route
     * @return \Illuminate\Http\Response
     */
    public function show(Route $route)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Route  $route
     * @return \Illuminate\Http\Response
     */
    public function edit(Route $route)
    {
        return view('pages.editroute', [
            'route'=>$route
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Route  $route
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Route $route)
    {
        $request->validate([
            'departure_time' =>'required',
            'destination_from'=>'required',
            'destination_to'=>'required'
        ]);

        $route->departure_time = request('departure_time');
        $route->destination_from = request('destination_from');
        $route->destination_to = request('destination_to');
        $route->save();
        return redirect('/busroutes');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Route  $route
     * @return \Illuminate\Http\Response
     */
    public function destroy(Route $route)
    {
        $route->delete();
        return redirect('/busroutes');
    }
}
