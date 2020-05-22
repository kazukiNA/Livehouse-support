<?php

use Illuminate\Support\Facades\Route;
use App\Project;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/*Route::get('/', function () {
    return view('welcome');
});*/
Route::get('/', 'ProjectController@welcome');

Route::get('/signin','Projectcontroller@signin');

Route::get('/signup','Projectcontroller@signup');

Auth::routes();

Route::get('home', 'ProjectController@index')->name('home');

Route::get('project','ProjectController@index');

Route::get('support/{project}','ProjectController@support');

Route::post('check/{project}','ProjectController@check');

Route::get('create','ProjectController@create');

Route::post('reward/{project}','ProjectController@reward');

Route::post('confirm/{project}','RewardsController@store');

Route::post('/charge','ChargeController@charge');

Route::post('/histry','ProjectController@histry');

//Route::match(['get','post'],'/confirm','ProjectController@inde');