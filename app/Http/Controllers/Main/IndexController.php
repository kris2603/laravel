<?php

namespace App\Http\Controllers\Main;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function main (){

        return view('main.index');
    }
    public function pricing (){

        return view('main.pricing');
    }
}
