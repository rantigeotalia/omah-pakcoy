<?php

namespace App\Http\Controllers;

use Carbon\Carbon; 
use App\Humidity;
use Illuminate\Http\Request;

class HumidityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $filter_date = $request->input('filter_date');
        $filter_status = $request->input('filter_status');
        if($request->filled('filter_date')) {
          $humidity = Humidity::where(function ($q) use ($filter_date) {
            $q->whereDate('date', '<=', $filter_date);
          })->orderBy('id', 'DESC');
        }elseif($request->filled('filter_status')){
            $humidity = Humidity::where(function ($q) use ($filter_status) {
            $q->where('note', $filter_status);
          });
        }
        else{
            $humidity = Humidity::whereDate('date', Carbon::today())->orderBy('date', 'DESC');
        }
        $humidity = $humidity->paginate(20);
        // dd($humidity);
        return view('humidity.index', compact('humidity','filter_date','filter_status'));
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
     * @param  \App\Humidity  $humidity
     * @return \Illuminate\Http\Response
     */
    public function show(Humidity $humidity)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Humidity  $humidity
     * @return \Illuminate\Http\Response
     */
    public function edit(Humidity $humidity)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Humidity  $humidity
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Humidity $humidity)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Humidity  $humidity
     * @return \Illuminate\Http\Response
     */
    public function destroy(Humidity $humidity)
    {
        //
    }
}
