<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Gawai;

class GawaiController extends Controller
{
    public function index(){
        $gawais = Gawai::all();
        $data = ['gawaises' => $gawais];

        dump($data);
        
        return view('gawai', $data);
    }
}
