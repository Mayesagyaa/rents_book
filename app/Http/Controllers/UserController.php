<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        $data = Book::get();
        return view('user.index', compact('data'));
    }
}
