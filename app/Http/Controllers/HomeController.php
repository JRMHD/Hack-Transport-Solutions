<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        // Your controller logic here
        return view('welcome'); // or any other view you want to return
    }
    
}
