<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(Request $request){
        $dataMSFT = app('App\Http\Controllers\marketstackController')->EOD_MSFT();
        return view('welcome');
    }
}
