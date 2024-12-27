<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BranchsuzukiController extends Controller
{
    public function index()
    {
        return view('pages.branchsuzuki');
    }
}
