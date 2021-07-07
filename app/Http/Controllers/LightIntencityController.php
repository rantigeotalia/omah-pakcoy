<?php

namespace App\Http\Controllers;

use Carbon\Carbon; 
use App\LightIntencity;
use Illuminate\Http\Request;

class LightIntencityController extends Controller
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
          $light_intencity = LightIntencity::where(function ($q) use ($filter_date) {
            $q->whereDate('date', '<=', $filter_date);
          })->orderBy('id', 'DESC');
        }elseif($request->filled('filter_status')){
            $light_intencity = LightIntencity::where(function ($q) use ($filter_status) {
            $q->where('note', $filter_status);
          });
        }else{
            $light_intencity = LightIntencity::whereDate('date', Carbon::today())->orderBy('date', 'DESC');
        }
 
        $light_intencity = $light_intencity->paginate(20);
        return view('light_intencity.index', compact('light_intencity','filter_date','filter_status'));
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
