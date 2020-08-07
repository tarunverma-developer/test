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

Route::get('/first/{id}', function($id) {
	echo $id;
   return view('first');
});

//Route::get('user', 'user@execute');
//Route::get('user/{id}', 'user@execute');


//usertable directory execution//

Route::get('index', 'user@execute');
Route::get('home', 'user@home');
Route::get('services', 'user@services');
Route::get('contact_us', 'user@contact_us');

Route::get('page', function($name)
{});
Route::get('page2', 'page2');
//Route::get('footer', 'user@execute');


//Route::get('user_click/{id}', 'user@execute');

// Route::view('first', 'first');
// Route::view('test', 'first');