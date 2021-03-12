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

/* Route::get('/', function () {
    return view('welcome',['page_name' => 'Home']);
});
*/

// Route > Controller
Route::get('/', 'SiteController@Home');
Route::get('/about', 'SiteController@About');
Route::get('/contact', 'SiteController@Contact');
// Route Perameter > Controller
Route::get('/name/{fname}/{mname}/{lname}', 'SiteController@MyName');
// Route Perameter > Controller
Route::get('/RoutePerameter/{servicename}', 'SiteController@Service');
// Rout Group
Route::group(['prefix'=>'account'],function(){
    Route::get('/profile',function(){ return 'Profile'; });
    Route::get('/updateprofile',function(){ return 'Update Profile'; });
    Route::get('/login',function(){ return 'Login'; });
    Route::get('/logout',function(){ return 'Logout'; });
});
Route::get('/account', 'SiteController@Account');
Route::get('/singleActionController', 'SingleActionController');
Route::resource('photos','PhotoController');
