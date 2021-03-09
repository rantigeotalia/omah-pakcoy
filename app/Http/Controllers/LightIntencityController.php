<?php

namespace App\Http\Controllers;

use App\LightIntencity;
use Illuminate\Http\Request;

class LightIntencityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $light_intencity = LightIntencity::all();
        return view('light_intencity.index', compact('light_intencity'));
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
     * @param  \App\LightIntencity  $lightIntencity
     * @return \Illuminate\Http\Response
     */
    public function show(LightIntencity $lightIntencity)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\LightIntencity  $lightIntencity
     * @return \Illuminate\Http\Response
     */
    public function edit(LightIntencity $lightIntencity)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\LightIntencity  $lightIntencity
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, LightIntencity $lightIntencity)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\LightIntencity  $lightIntencity
     * @return \Illuminate\Http\Response
     */
    public function destroy(LightIntencity $lightIntencity)
    {
        //
    }
}
