<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    function index() {
    	return view('index', get_defined_vars());
    }
}
