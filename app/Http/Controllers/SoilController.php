<?php

namespace App\Http\Controllers;

use Carbon\Carbon; 
use App\Soil;
use Illuminate\Http\Request;

class SoilController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $filter_date = $request->input('filter_date');
        if($request->filled('filter_date')) {
          $soil = Soil::where(function ($q) use ($filter_date) {
            $q->whereDate('date', '<=', $filter_date);
          })->orderBy('id', 'DESC');
        }else{
            $soil = Soil::whereDate('date', Carbon::today())->orderBy('id', 'DESC');
        }
        $soil = $soil->paginate(20);
        return view('soil_moisture.index', compact('soil','filter_date'));
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
     * @param  \App\Soil  $soil
     * @return \Illuminate\Http\Response
     */
    public function show(Soil $soil)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Soil  $soil
     * @return \Illuminate\Http\Response
     */
    public function edit(Soil $soil)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Soil  $soil
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Soil $soil)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Soil  $soil
     * @return \Illuminate\Http\Response
     */
    public function destroy(Soil $soil)
    {
        //
    }
}
