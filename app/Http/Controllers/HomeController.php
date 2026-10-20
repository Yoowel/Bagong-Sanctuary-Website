<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() 
    {
        $randomId = app(ProductController::class)->getRandomId();

        return view('welcome', compact('randomId'));
    }
}
