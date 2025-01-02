<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CustomercareController extends Controller
{
    public function index()
    {
        return view('pages.customercare');
    }
}
