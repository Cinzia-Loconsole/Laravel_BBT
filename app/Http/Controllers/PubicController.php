<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PubicController extends Controller
{
    function home() {
        return view('welcome');
    }
}
