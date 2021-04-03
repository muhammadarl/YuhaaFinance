<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

class cryptoController extends Controller
{
    public function index(Request $request){
        return view('Cryptocurrencies');
    }
}
