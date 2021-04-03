<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

class marketstackController extends Controller
{
    public function EOD_MSFT(){
        $API_KEY = "fd78c1686164fcba06d5860018ed3c3f";
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL,("https://www.alphavantage.co/query?function=TIME_SERIES_DAILY&symbol=MSFT&apikey=" . $API_KEY));
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $server_output = curl_exec ($ch);
        curl_close ($ch);
        $result = json_decode($server_output);
    }
}
