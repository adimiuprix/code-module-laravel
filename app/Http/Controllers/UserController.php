<?php

namespace App\Http\Controllers;

class UserController extends Controller
{
    // Contoh menggunakan parameter
    // public function show(string $id){
    //     return view('user.profile', [
    //         'user' => User::findOrFail($id)
    //     ]);
    // }

    public function index(){
        $nama = 'Reynold';

        dump($nama);
    }

    public function myprofile(){
        $nama = 'Arnold';

        dump($nama);
    }
}
