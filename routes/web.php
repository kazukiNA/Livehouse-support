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
Route::get('/', 'Orner\ProjectController@welcome');

Auth::routes();

Route::get('login/{social}','Auth\LoginController@redirectProvider')->where('social','twitter|facebook|google');
Route::get('login/{social}/callback','Auth\LoginController@handleProviderCallback')->where('social','twitter|facebook|google');

Route::group(['prefix' => 'orner', 'middleware' => 'guest:orner'], function() {
    Route::get('/', function () {
        return view('welcome');
    });
Route::get('login', 'Orner\Auth\LoginController@showLoginForm')->name('orner.login');
Route::post('login', 'Orner\Auth\LoginController@login')->name('orner.login');

Route::get('register', 'Orner\Auth\RegisterController@showRegisterForm')->name('orner.register');
Route::post('register', 'Orner\Auth\RegisterController@register')->name('orner.register');

Route::get('password/rest', 'Orner\Auth\ForgotPasswordController@showLinkRequestForm')->name('orner.password.request');


});

Route::group(['prefix' => 'orner', 'middleware' => 'auth:orner'], function(){
    Route::post('logout', 'Orner\Auth\LoginController@logout')->name('orner.logout');
    Route::get('home', 'Orner\HomeController@index')->name('orner.home');
    Route::get('histry/{rere}','Orner\HomeController@histry')->name('orner.home');
    Route::get('edit/project/{id}','Orner\HomeController@edit_project')->name('orner.edit');
    Route::post('edit/project/{id}','Orner\HomeController@update_project')->name('orner.edit');
    Route::get('edit/reward/{id}','Orner\HomeController@edit_reward')->name('orner.edit');
    Route::post('edit/reward/{id}','Orner\HomeController@update_reward')->name('orner.edit');
    Route::post('delete/reward/{id}','Orner\HomeController@delete_reward')->name('orner.delete');
    Route::get('/create','Orner\ProjectController@create');
    Route::post('/reward/{project}','Orner\ProjectController@reward');
    Route::post('confirm/','Orner\ProjectController@store');
    Route::post('save/','Orner\ProjectController@save');
    
});


Route::get('home', 'HomeController@index')->name('home');

Route::get('support/{project}','SupportController@support');

Route::post('check/{project}','SupportController@check');

Route::post('done/','SupportController@pay');



Route::post('/histry','HomeController@histry');



//Route::match(['get','post'],'/confirm','ProjectController@inde');