<?php

namespace App\Http\Controllers;
use App\Models\Book;

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
    public function book(){
        //Read in CRUD
        $books = Book::All();

        return view('books', compact('books'));
    }
}
