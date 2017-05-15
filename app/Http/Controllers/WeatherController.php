<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

class WeatherController extends Controller
{
	public function doReport(Request $request)
	{
		// Get Report Type and its parameters
		$report = $request->input("report");
		$from = $request->input("fromDate");
		$to = $request->input("toDate");
		
		// Validate the request parameters (note will automatically redirect back to Weather View if errors)
		$this->validateForm($request);
		
		// Call Web API to get Weather Data
		$uri = "get/0/" . $from . "/" . $to;
		$client = new Client(['base_uri' => 'http://cloudservices-workshop.1d35.starter-us-east-1.openshiftapps.com/cloadservices/rest/weather/']);
		$response = $client->request('GET', $uri, ['auth' => ['CloudWorkshop', 'dGVzdHRlc3Q=']]);
//		echo "Status code of " . $response->getStatusCode();
		$jsonObj = json_decode($json = $response->getBody(), true);
//		echo "This is the data  " . json_encode($jsonObj['data']);
//		echo "Length of array is " . count($jsonObj['data']);
		
		// Display the Report
		return view("weather", ["data"=>$jsonObj['data']]);
	}
	
	private function validateForm(Request $request)
	{
		// Setup Data Validation Rules for Login Form
		$rules = ['fromDate' => 'Required | date_format:"Y-m-d H:i:s"',
				  'toDate' => 'Required | date_format:"Y-m-d H:i:s"'];
		
		// Run Data Validation Rules
		$this->validate($request, $rules);
	}
}
