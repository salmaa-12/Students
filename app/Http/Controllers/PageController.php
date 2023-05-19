<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){
        $title = "Hello student .";
        return view('pages.index' , compact('title'));
    }
}
