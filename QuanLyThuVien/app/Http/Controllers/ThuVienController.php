<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ThuVienController extends Controller
{
    public function welcome(){

        $name = [
                ["Ban 01", "lop Web", "Truong Phenikaa"], 
                ["Ban 02", "lop Web", "Truong Phenikaa"]
                ];
        return view('thuvien', compact('name'));
    }
}
