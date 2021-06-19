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
	   	// $temp = 
	   	return view('dashboard.index', compact('device'));
   }

}
