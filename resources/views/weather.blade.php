<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
    <head>
    	<!-- Metadata Tags -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

		<!-- Page Title -->
        <title>IoT Weather</title>

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
                    IoT Weather
                </div>                               
				<!-- Report Search Form -->
                <form method="POST" action="doreport">
                	<input type="hidden" name="_token" id="csrf-token" value="{{ Session::token() }}" />
                	<table>
                		<tr>
                			<td>Report Type:</td>
                			<td>
                				<select name="report">
                					<option value="0" selected>Chart</option>
  									<option value="1">Tabular</option>
								</select>
							</td> 
						</tr>
						<tr>
							<td>From Date:</td>
							<td><input type="text" name="fromDate" value=""><?php echo $errors->first('fromDate')?></td>
						</tr>
						<tr>
							<td>To Date:</td>
							<td><input type="text" name="toDate" value=""><?php echo $errors->first('toDate')?></td>
						</tr>
						<tr>
							<td colspan="2"><input type="submit" value="Display"></td>
						</tr>
						<tr>
							<td colspan="2">NOTE: dates must be entered as YYYY-MM-dd HH:MM:SS</td>
						</tr>
					</table> 
                </form>
            </div>
        </div>
    </body>
</html>
