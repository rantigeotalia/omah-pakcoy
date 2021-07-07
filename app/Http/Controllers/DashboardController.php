<?php

namespace App\Http\Controllers;

use App\Device;
use Illuminate\Http\Request;
use App\Humidity;
use App\LightIntencity;
use App\Soil;
use App\Temperature;

class DashboardController extends Controller
{
   public function index()
   {
	   	$device = Device::all();
	   	$humidity = Humidity::orderByDesc('id')->take(20)->get();
	   	$temperatur = Temperature::orderByDesc('id')->take(20)->get();
	   	$soil = Soil::orderByDesc('id')->take(20)->get();
	   	$light_intencity = LightIntencity::orderByDesc('id')->take(20)->get();
	   	$average1 = $temperatur->avg('temperature');
	   	$average2 = $humidity->avg('humidity');
	   	$average3 = $soil->avg('soil_moisture');
	   	$average4 = $light_intencity->avg('light_intencity');

	   	// dd($average3);

	   	//temperature
		if($average1 <= 15){
			$note1 = "Cool";
		}elseif ($average1 >= 15 && $average1 <= 30){
			$note1 = "Normal";
		}else{
			$note1 = "Hot";
		}

		//humidity
		if($average2 <= 80){
			$note2 = "Dry";
		}elseif ($average2 >= 80 && $average2 <= 90) {
			$note2 = "Normal";
		}else{
			$note2 = "Wet";
		}

		//soil moisture
		if($average3 <= 200){
			$note4 = "Dry";
		}elseif ($average3 >= 200 && $average3 <= 600) {
			$note4 = "Normal";
		}else{
			$note4 = "Wet";
		}

		//light intencity
		if($average4 <= 300){
			$note3 = "Dark";
		}elseif ($average4 >= 300 && $average4 <= 78900) {
			$note3 = "Normal";
		}else{
			$note3 = "Bright";
		}
		
		return view('dashboard.index', compact('device','average1','average2', 'average3','average4', 'note1','note2','note3','note4'));
   }

}
