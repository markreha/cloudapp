**IoT Reporting Reference Application**
==================
The example IoT Reporting Reference application implements a simple IoT Reporting application that can be used to display the posted data from IoT Device Raspberry Pi Sense HAT application. The IoT Reporting Reference application consumes a REST API published by the [IoT Services Reference application](https://github.com/markreha/cloudservices/blob/master/README.md). This application is used to demonstrate a simple, scalable, Cloud based IoT application.

![IoT Reporting Logical Architecture](https://github.com/markreha/cloudworkshop/blob/master/sdk/docs/architecture/images/iotreporting.png)

Architecture & Technologies
--------
 The IoT Reporting Reference application is designed and implemented in PHP using the Laravel Framework. The application also imports the LavaCharts library, for charting, and the Guzzle library, for an HTTP Client for making REST API calls. 
 
REST API's
--------
The IoT Services Reference application publishes 3 API's, one of which is an API used for testing and the remaining 2 API's to save and retrieve IoT Weather Data. It should be noted that the REST endpoint is secured by using HTTPS and Basic HTTP Authentication. All REST API's are based off of the [hostname]/cloudservices/weather URL.

The REST API's as based off of the include:

 - GET at /test: will return a test string and is used to test the endpoint
 - GET at /get: will return IoT Weather data for a specified Device ID, From Date, and End Date
 - POST at /save: will save IoT Weather data from the a specified WeatherSensorModel

The UML class diagram for the Services class can be found [here](http://htmlpreview.github.io/?https://github.com/markreha/cloudworkshop/blob/master/sdk/docs/javadoc/edu/gcu/web/service/RestService.html).

The JavaDoc for the entire application can be found [here](http://htmlpreview.github.com/?https://github.com/markreha/cloudworkshop/blob/master/sdk/docs/javadoc/index.html) 

Building
--------
The instructions for building the IoT Reference application can be found [here](https://github.com/markreha/cloudworkshop/blob/master/sdk/docs/development/README.md).


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

