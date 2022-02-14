<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyController extends Controller
{
      public function index(){
          return view('welcome');
      }

      public function indexProduct(){
          return view('products.index');
      }

      public function about(){
          return view('about');
      }

      public function creater(){
        return env('CREATER_NAME');
      }

      public function database(){
        return env('DB_DATABASE');
      }

      public function users(){
        return response()->json([
                    'name' => "Rustam",
                    'companyt'=>'mPokket'
                ]);
      }

      public function redirectURL(){
          echo "Redirect to the User Url <br>";
          return redirect('/users');
      }

      public function view(){
          return view('products.view');
      }
}
