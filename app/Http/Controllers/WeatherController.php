<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;
use Khill\Lavacharts\Lavacharts;

/**
 * Main Weather Controller.
 * 
 * @author mark
 *
 */
class WeatherController extends Controller
{
	/**
	 * doReport() that is the back end for the Report Generator, which performs the following functions:
	 * 	1. Gets the POSTED form parameters.
	 *  2. Validates the form data.
	 *  3. Calls the Web API to get the Weather Data.
	 *  4. Renders a Weather Report.
	 *  
	 * @param Request $request
	 * @return \Illuminate\View\View|\Illuminate\Contracts\View\Factory
	 */
	public function doReport(Request $request)
	{
		// Get Report Type and its parameters
		$report = $request->input("report");
		$from = $request->input("fromDate");
		$to = $request->input("toDate");
		
		// Validate the request parameters (note will automatically redirect back to Weather View if errors)
		$this->validateForm($request);
		
		// Call Web API to get Weather Data
		$serviceURL = "http://cloudservices-workshop.1d35.starter-us-east-1.openshiftapps.com/cloudservices/rest/weather/";
		$api = "get";
		$device = 0;		
		$uri = $api . "/" . $device . "/" . $from . "/" . $to;
		$username = "CloudWorkshop";
		$password = "dGVzdHRlc3Q=";
		$client = new Client(['base_uri' => $serviceURL]);
		$response = $client->request('GET', $uri, ['auth' => [$username, $password]]);
		
		// Process API Response
		if($response->getStatusCode() == 200)
		{
			// Convert JSON to Objects and render report
			$jsonObj = json_decode($json = $response->getBody(), true);
			if($report == 0)
			{
				// If data then display Chart else display error
				if(count($jsonObj['data']) != 0)
				{	
					// Build a Lavachart Datatable, Line Chart, and pass the Chart to the View to render
					$lava = new Lavacharts;
					$weatherData = $lava->DataTable();
					$weatherData->addStringColumn('Date')->addNumberColumn('Temp')->addNumberColumn('Pressure')->addNumberColumn('Humidity');
					foreach ($jsonObj['data'] as $item)
					{
						$weatherData->addRow([$item['date'], $item['temperature'], $item['pressure'], $item['humidity']]);
					}
					$lava->LineChart('Temps', $weatherData, ['title' => 'Weather in Date Range']);
					return view("weatherReportChart")->with("lava", $lava);
				}
				else
				{
					// Pass null Chart to display "no records found"
					return view("weatherReportChart")->with("lava", null);
				}
			}
			else
			{
				// Pass the Weather data to the View to render in an HTML Table
				return view("weatherReportTable")->with("data", $jsonObj);
			}
		}
		else
		{
			return view("weatherError")->with("error", $response->getStatusCode());
		}
	}
	
	/**
	 * Validate the Report Generation Form data.
	 * 
	 * @param Request $request
	 */
	private function validateForm(Request $request)
	{
		// Setup Data Validation Rules for Login Form
		$rules = ['fromDate' => 'Required | date_format:"Y-m-d H:i:s"',
				  'toDate' => 'Required | date_format:"Y-m-d H:i:s"'];
		
		// Run Data Validation Rules
		$this->validate($request, $rules);
	}
}
