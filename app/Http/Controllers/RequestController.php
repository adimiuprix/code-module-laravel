<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class RequestController extends Controller
{
    public function index(Request $request){
        // $request->fullUrl();  Mengambil url penuh
        // $request->host();    Mengambil nama host
        // $request->httpHost();    Mengambil Http dari host

        //  $request->ip(); Mengambil IP
        // dd($ipAddress);
    }
}
