<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MyController;
use App\Http\Controllers\pagesController;

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


// Route::get('/', function () {
//     return view('welcome');

// });

Route::get('/',[MyController::class,'index']);


// Route::get('/about', function () {
//     return view('about');

// });

Route::get('about',[MyController::class,'about'])->name('about');

// Route::get('/creater', function () {
//     return env('CREATER_NAME');

// });

Route::get('creater',[MyController::class,'creater']);

// Route::get('/database', function () {
//     return env('DB_DATABASE');

// });

Route::get('database',[MyController::class,'database']);

// Route::get('/users', function (){
//     return response()->json([
//         'name' => "Rustam",
//         'companyt'=>'mPokket'
//     ]);
// });

Route::get('users',[MyController::class,'users']);

// Route::get("/name",function(){
//     return redirect('/users');
// });

Route::get('redirect',[MyController::class,'redirectURL']);


// products for index 
Route::get('/products',[MyController::class,'indexProduct']);
 

//product view page 

Route::get('/products/view',[MyController::class,'view']);

Route::get('/products/{name}',[MyController::class,'show']);

//pattern integer
Route::get('/products/{id}',[MyController::class,'show'])->where('id','[0-9]+');

//pattern both int and string 

Route::get('/products/{name}/{id}',[MyController::class,'show'])->where([
    'name'=>'[a-zA-Z]+',
    'id'=>'[0-9]+'
    ]);


    // code for the about controller 
Route::get('/home',  [pagesController::class, 'index']);
Route::get('/about',  [pagesController::class, 'about']);
Route::get('/portfolia',  [pagesController::class, 'portfolia']);
Route::get('/contact',  [pagesController::class, 'contact']);
