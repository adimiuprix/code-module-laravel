<?php

namespace App\Http\Controllers;
use App\Models\User;

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

    public function onetoone(){
        $users = User::first()->get();

        return view('eloquent.phonedata', compact('users'));
    }
}
