<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Table extends Controller
{
    public function table(){
        $data = [
            'title' => 'Table'
        ];
        return view("table", $data);
    }


    public function data_table(){
        $data = [
            'title' => 'Halaman Data Tabel'
        ];
        return view("data_table",$data);
    }

}