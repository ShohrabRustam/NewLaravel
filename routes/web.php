<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MyController;

/*
|--------------------------------------------------------------------------\
| Web Routes      <<<<<<<<<<<<<<<<<<<<<<<<------------------------------------------------------->>>>>>>>>>>>>>>>>>>>>>>>
|--------------------------------------------------------------------------/
|
| Here is where you can register web routes for your application. 
| These routes are loaded by the RouteServiceProvider within a group 
| which contains the "web" middleware group. 
| Now create something great!
|
*/


Route::get('/', function () {
    return view('welcome');

});

Route::get('/about', function () {
    return view('about');

});
Route::get('/creater', function () {
    return env('CREATER_NAME');

});

Route::get('/database', function () {
    return env('DB_DATABASE');

});

Route::get('/users', function (){
    return response()->json([
        'name' => "Rustam",
        'companyt'=>'mPokket'
    ]);
});

Route::get("/name",function(){
    return redirect('/users');
});