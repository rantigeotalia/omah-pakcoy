<?php

namespace App\Http\Controllers;
use App\Humidity;
use App\Soil;
use App\Temperature;
use App\LightIntencity;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ReadSensorController extends Controller
{
    public function read(Request $request)
    {
    	if (isset($_GET['suhu'])) {

	    	$temperature = new Temperature;
	    	$temperature->temperature = $_GET['suhu'];
	    	$myTime = Carbon::now();
	    	$temperature->date = $myTime->toDateTimeString();
	    	$temperature->note = "Normal";
	    	$temperature->save();

	    }else{
	    	echo "Salah";
	    }
	}
}
