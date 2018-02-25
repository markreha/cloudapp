<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script type="text/javascript" src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
    <script type="text/javascript" src="https://netdna.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://pingendo.github.io/pingendo-bootstrap/themes/default/bootstrap.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    <link href="resources/assets/css/weather.css" rel="stylesheet" type="text/css" >

    <script type="text/javascript" src="https://code.jquery.com/ui/1.11.0/jquery-ui.min.js"></script>
    <script type="text/javascript" src="resources/assets/js/jquery-ui-timepicker-addon.js"></script>
    <script type="text/javascript" src="resources/assets/js/jquery-ui-timepicker-addon-i18n.min.js"></script>
    <script type="text/javascript" src="resources/assets/js/jquery-ui-sliderAccess.js"></script>
    <link rel="stylesheet" type="text/css" href="resources/assets/css/jquery-ui-timepicker-addon.css">
	<link rel="stylesheet" media="all" type="text/css" href="https://code.jquery.com/ui/1.11.0/themes/smoothness/jquery-ui.css" />

    <title>@yield('title')</title>
</head>

<body>
    @include('layouts.header')
    <div align="center">
        @yield('content')
    </div>
    @include('layouts.footer')
</body>

</html>