<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class HomeController extends Controller
{
    public function index(){
        return view('home');
    }

    public function comics(){
        $comics = config('dc-database');


        return view('comics',['comics'=>$comics]);
    }
}

