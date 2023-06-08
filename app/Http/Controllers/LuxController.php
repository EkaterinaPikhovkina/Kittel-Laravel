<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LuxController extends Controller
{
    public function index()
    {
        return view('lux');
    }
}
