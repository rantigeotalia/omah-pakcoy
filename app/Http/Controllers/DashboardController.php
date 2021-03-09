<?php

namespace App\Http\Controllers;

use App\Device;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
   public function index()
   {
	   	$device = Device::all();
	   	return view('dashboard.index', compact('device'));
   }

}
