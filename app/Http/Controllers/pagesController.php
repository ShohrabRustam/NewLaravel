<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pagesController extends Controller
{
    public function index(){
        return view('pages.home');
    }

    public function about(){
        $name="Rustam ";
        $users= ["Latha", "Siva", "Guru", "Nikhil"];
        return view ('pages.about')->with('name',$name)->with('users',$users);
    }

    public function portfolia(){

    }

    public function contact(){

    }

}
