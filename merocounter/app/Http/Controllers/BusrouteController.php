<?php

namespace App\Http\Controllers;

use App\Models\Busroute;
use Illuminate\Http\Request;

class BusrouteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('busroutes');
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
     * @param  \App\Models\Busroute  $busroute
     * @return \Illuminate\Http\Response
     */
    public function show(Busroute $busroute)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Busroute  $busroute
     * @return \Illuminate\Http\Response
     */
    public function edit(Busroute $busroute)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Busroute  $busroute
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Busroute $busroute)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Busroute  $busroute
     * @return \Illuminate\Http\Response
     */
    public function destroy(Busroute $busroute)
    {
        //
    }
}
