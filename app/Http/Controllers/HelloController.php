<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloController extends Controller
{
    public function index(){
        $coolString = "Hello from Routes again.";
        return view ();
    }
}
