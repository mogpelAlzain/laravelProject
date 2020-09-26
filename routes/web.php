<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::group(['namespace' => 'Admin'] ,function(){
     Route::get('admins','TestController@showTest');
     Route::get('second0','SecondController@showString0') -> middleware('auth');
     Route::get('second2','SecondController@showString1');
     Route::get('second3','SecondController@showString2');
     Route::get('second4','SecondController@showString3');

});
Route::get('login', function ()
{
    return "This is Page login";
})->name('login');
Route::resource('News','NewsController');
Route::get('index','IndexController@getIndex');
Route::get('landing', function ()
{
    return view('landing');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes(['verify' => true]);

Route::get('/home', 'HomeController@index')->name('home')->middleware('verified');
