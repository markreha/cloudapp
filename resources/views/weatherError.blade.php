<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
    <head>
    	<!-- Metadata Tags -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

		<!-- Page Title -->
        <title>IoT Weather Error Page</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <link href="resources/assets/css/weather.css" rel="stylesheet" type="text/css" >
    </head>
    <body>
        <div class="flex-center position-ref full-height">
        	<!-- Top Menu -->
             <div class="top-right links">
            	<a href="{{ url('/') }}">Home</a>
                <img src="resources/assets/image/logo.png" width="65" height="65"/>
			</div>
 
 			<!-- Page Content -->
            <div class="content">
            	<!--  Title and Menu Links -->
                <div class="title m-b-md">
                    IoT Weather Error
                </div>                               
               <div class="links">
                    <a href="weather">Run Another Report</a>
                 </div>
				<br>
				<!-- Display Error -->
				Error Status Code: $error
             </div>
        </div>
    </body>
</html>
