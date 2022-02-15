<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyController extends Controller
{
      public function index(){
          return view('welcome');
      }

      public function indexProduct(){
          $title = "This is the passing something to view ";
          return view('products.index')->with('title',$title);
      }

      public function about(){
          print_r(route('about'));
          $title="Passing that text on view <br>";
          return view('about');
      }

      public function creater(){
          $title = "Data pass in view <br>";
        return env('CREATER_NAME',compact('title'));
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
          $creater="Rustam";
        $title = "This is the passing something to view ";
          return view('products.view',compact('title','creater'));
      }

      public function show($name){
          $data = [
              'iphone'=>'Iphone',
              'samsung'=>'Samsung'
          ];
          return view('products.index',[
              'products'=>$data[$name] ?? 'products '.$name." does not exit"
          ]);
      }


}
