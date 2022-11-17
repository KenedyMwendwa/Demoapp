<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //function for welcome page 
    public function index (){
        return view ('welcome');
    }
    // function for the about page
    public function about(){
        return view ('about');
    }
    //function for the contact page
    public function contact (){
        return view ('contact');
    }

}
