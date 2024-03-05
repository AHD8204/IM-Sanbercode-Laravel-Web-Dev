<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    //
    public function register(){
        return view("register");
    }
    public function welcome(Request $request)
    {
        // Menangkap semua data yang dikirimkan melalui formulir
        $nama = $request['name'];
        $last = $request['last'];
        return view('welcome', ['nama' => $nama], ['last' => $last]);

    }
    
}