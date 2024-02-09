<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexControllar extends Controller
{
    public function body(){
        return view("index");
    }
}
