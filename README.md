**IoT Reporting Reference Application**
==================
The example IoT Reporting Reference application implements a simple IoT Reporting application that can be used to display the posted data from IoT Device Raspberry Pi Sense HAT application. The IoT Reporting Reference application consumes a REST API published by the [IoT Services Reference application](https://github.com/markreha/cloudservices/blob/master/README.md). This application is used to demonstrate a simple, scalable, Cloud based IoT application.

![IoT Reporting Logical Architecture](https://github.com/markreha/cloudworkshop/blob/master/sdk/docs/architecture/images/iotreporting.png)

Architecture & Technologies
--------
 The IoT Reporting Reference application is designed and implemented in PHP using the Laravel Framework. The application uses Bootstrap to assist in supporting a responsive design. The application imports the LavaCharts library, for charting, and the Guzzle library, for an HTTP Client used for making the REST API calls. The application also uses the jQuery based UI date time picker to support displaying an easy to use, touch friendly, UI widget for entering dates and times.
 
Basic Application Functionality
--------
The IoT Reporting Reference application primary functionality includes implementing a simple reporting parameter screen, allowing the user to specify the Report Type, Report Start Date, and Report End Date, and a report display screen, displaying the IoT data either as a Tabular Report or a Line Chart Report. The main application is displayed by the Welcome View and uses standard Laravel layouts to display common application menus, headers, and footers. The application supports a response design and can be accessed from desktop, mobile, and tablet browsers.

![IoT Reporting Screen Shots](https://github.com/markreha/cloudworkshop/blob/master/sdk/docs/architecture/images/iotreportingss.png)

The bulk of the Reporting functionality is implemented in the WeatherController class in the doReport() method. This method performs the following logic:
<ul>
	 <li>Retrieves the POSTED form data from the Weather View:</li>
	 - reportType = 0 for Chart Report or report = 1 for Tabular Data Report<br/>
	 - fromDate = Report From Date<br/>
	 - toDate = Report To Date
	 <li>Validates the POSTED form data:</li>
	 - if validation fails the Weather View is redisplayed
	 <li>Invokes the IoT Services REST API to get the Weather Data using the Guzzle HTTP Client class:</li>
	 - GET request to the IoT Service /get REST API passing a Device ID of 0, the Report From Date, and the Report To Date as API parameters<br/>
	 - the IoT Services REST API returns JSON (see the ResponseDataModel and WeatherDataModel from the IoT Services Reference application JavaDocs)
	 <li>Renders the Weather Report:</li>
	 - If the reportType is 0 then use LavaCharts to render a Line Graph by forwarding to the WeatherReportChart View<br/>
	 - else if the reportType is 1 then render a standard HTML table by forwarding to the WeatherReportTable View
	 </ul>

Information on the Guzle Library can be found [here](http://guzzle.readthedocs.io/en/latest/index.html).

Information on the LavaCharts Library can be found [here](http://lavacharts.com).

The PhpDoc for the entire application can be found [here](http://htmlpreview.github.com/?https://github.com/markreha/cloudworkshop/blob/master/sdk/docs/phpdoc/index.html) 

Building
--------
The instructions for building the IoT Reporting Reference application can be found [here](https://github.com/markreha/cloudworkshop/blob/master/sdk/docs/development/README.md).


----------

<p align="center"><img src="https://laravel.com/assets/img/components/logo-laravel.svg"></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable, creative experience to be truly fulfilling. Laravel attempts to take the pain out of development by easing common tasks used in the majority of web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, yet powerful, providing tools needed for large, robust applications. A superb combination of simplicity, elegance, and innovation give you tools you need to build any application with which you are tasked.

## Learning Laravel

Laravel has the most extensive and thorough documentation and video tutorial library of any modern web application framework. The [Laravel documentation](https://laravel.com/docs) is thorough, complete, and makes it a breeze to get started learning the framework.

If you're not in the mood to read, [Laracasts](https://laracasts.com) contains over 900 video tutorials on a range of topics including Laravel, modern PHP, unit testing, JavaScript, and more. Boost the skill level of yourself and your entire team by digging into our comprehensive video library.

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](http://laravel.com/docs/contributions).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell at taylor@laravel.com. All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](http://opensource.org/licenses/MIT).

