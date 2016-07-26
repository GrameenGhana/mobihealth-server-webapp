<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/




Route::match(array('get','post'),'/api/login', array('uses' => 'LoginActivityController@saveLoginActivity'));
Route::match(array('get','post'),'/api/tracking', array('uses' => 'UseageTrackingController@saveTrack'));


Route::get('/', function()
{
    return View::make('index');
});

Route::get('index', function()
{
    return View::make('index');
});
Route::get('chart', function()
{
	$types=UseageTracking::ChartData();
   return View::make('chart')
   					->with(['types'=>$types]);
	//return $types;
});

Route::get('gallery', function()
{
    return View::make('gallery');
});

Route::get('table', function()
{
	
	$users=UseageTracking::UsageData();
    return View::make('table',['users'=>$users]);
});
Route::get('typeofmessages', function()
{
	
	$types=UseageTracking::TypeofMessages();
    return View::make('typeofmessages',['types'=>$types]);
});

Route::get('pregnancymessages', function()
{
	
	$types=UseageTracking::PregnancyMessages();
	$mgs=UseageTracking::TrimesterMessages();
	$duration=UseageTracking::MessageDuration();

    return View::make('pregnancyMessages')
    				->with([
    							'types'=>$types,
    							'mgs'=>$mgs,
    							'duration'=>$duration]);
});

Route::get('farmer', function() {
 echo    "Echo Setho 1";
});
Route::get('firstyearmessages', function()
{
	$category=UseageTracking::BabyMessagesCategory();
	$duration=UseageTracking::BabyMessageDuration();

    return View::make('firstYearMessages')
    				->with([
    							'category'=>$category,
    							'duration'=>$duration]);
});
Route::get('login', function()
{
    return View::make('login');
});
