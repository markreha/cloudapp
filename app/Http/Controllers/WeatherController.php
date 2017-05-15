<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;

class WeatherController extends BaseController
{
	public function doReport(Request $request)
	{
		// Get Report Type and its parameters
		$report = $request->input("report");
		$from = $request->input("fromDate");
		$to = $request->input("toDate");
		$id = $request->input("id");
		
		// Call Web API to get Weather Data
		
		// Display the Report
		return view("weather");
	}
}
