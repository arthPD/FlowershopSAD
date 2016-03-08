<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/


/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {
    
//Resource Route for logging in
	Route::get('login', 'SessionsController@create');//Overriding the create
	Route::get('logout', 'SessionsController@destroy');//and destroy method
	Route::resource('sessions', 'SessionsController', ['only' => ['store', 'create', 'destroy']]);

//PagesController Routes
	//home side    
    Route::get('/', 'PagesController@home');
    Route::get('bouquets', 'PagesController@bouquets');
    Route::get('events', 'PagesController@events');
    Route::get('flowers', 'PagesController@flowers');
    //admin side
  //  Route::get('admin', 'PagesController@admin');
    Route::get('inventory', 'PagesController@inventory');
    Route::get('maintenance', 'PagesController@maintenance');
    Route::get('report', 'PagesController@report');


//MaintenanceController Routes
    Route::get('maintenance-flowers', 'MaintenanceController@flowers');
    Route::get('maintenance-bouquets', 'MaintenanceController@bouquets');
    Route::get('maintenance-events', 'MaintenanceController@events');

    //FlowerController Routes
    Route::post('maintenance-flowers', 'FlowerController@add');
    Route::get('maintenance-flowers/{flower}/show', 'FlowerController@show');
    Route::patch('maintenance-flowers/{flower}', 'FlowerController@edit');

});
