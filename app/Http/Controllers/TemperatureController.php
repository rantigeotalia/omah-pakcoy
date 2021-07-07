<?php

namespace App\Http\Controllers;
use Carbon\Carbon; 
use App\Temperature;
use Illuminate\Http\Request;


class TemperatureController extends Controller
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
          $temperature = Temperature::where(function ($q) use ($filter_date) {
            $q->whereDate('date', '<=', $filter_date);
          })->orderBy('id', 'DESC');
        }elseif($request->filled('filter_status')){
            $temperature = Temperature::where(function ($q) use ($filter_status) {
            $q->where('note', $filter_status);
          });
        }else{
            $temperature = Temperature::whereDate('date', Carbon::today())->orderBy('id', 'DESC');
        }
        $temperature = $temperature->paginate(20);

        return view('temperature.index', compact('temperature','filter_date','filter_status'));
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
     * @param  \App\Temperature  $temperature
     * @return \Illuminate\Http\Response
     */
    public function show(Temperature $temperature)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Temperature  $temperature
     * @return \Illuminate\Http\Response
     */
    public function edit(Temperature $temperature)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Temperature  $temperature
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Temperature $temperature)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Temperature  $temperature
     * @return \Illuminate\Http\Response
     */
    public function destroy(Temperature $temperature)
    {
        //
    }
}
