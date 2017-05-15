<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>IoT Weather</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @if (Auth::check())
                        <a href="{{ url('/') }}">Home</a>
                    @else
                        <a href="{{ url('/login') }}">Login</a>
                        <a href="{{ url('/register') }}">Register</a>
                    @endif
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    IoT Weather
                </div>                               
               <div class="links">
                    <a href="/cloudapp/">Home</a>
                    <a href="https://github.com/markreha/cloudworkshop/tree/master/sdk/docs">SDK Documentation</a>
                    <a href="https://github.com/markreha/cloudworkshop/tree/master/sdk">GitHub</a>
                </div>
				<br>
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
                
                @if(!empty($data))
                	@php
                		echo "From the View this is the length" . count($data);
                	@endphp
                @endif
            </div>
        </div>
    </body>
</html>
