<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DemoController;
use App\Http\Controllers\PhotoController;
use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\CustomerController;
use  App\Models\Customer;

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
Route::get('/', [DemoController::class , 'index']);
Route::resource('photo',PhotoController::class);


// insert query Route 

Route::get('/customer',[CustomerController::class,'index']);

Route::post('/customer',[CustomerController::class,'store']);


// from routes
Route::get('/register',[RegistrationController::class , 'index']);
Route::post('/register',[RegistrationController::class , 'register']);

// end of from routes
Route::get('/home', function () {
    return view('home');
});


Route::get('/about', function () {
    return view('about');
});


Route::get('/{name?}', function ($name = null) {
    $data = compact('name');
    return view('newpage')->with($data);
});



Route::get('/demo', function () {
   echo 'hello world';
});

Route::get('/laravel', function () {
    return view('demo');
 });
Route::post('/test', function () {
    echo 'testing the route';
 });