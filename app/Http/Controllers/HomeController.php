<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('pages.index');
    }

    public function about()
    {
        return view('pages.about');
    }

    public function contact()
    {
        return view('pages.contact');
    }

    public function branchsuzuki()
    {
        return view('pages.branchsuzuki');
    }

    public function branchhonda()
    {
        return view('pages.branchhonda');
    }

    public function branchhyundai()
    {
        return view('pages.branchhyundai');
    }

    public function services()
    {
        return view('pages.services');
    }

    public function bookservice()
    {
        return view('pages.bookservice');
    }

    public function testdrive()
    {
        return view('pages.testdrive');
    }

    public function sparepart()
    {
        return view('pages.sparepart');
    }

    public function bodypaint()
    {
        return view('pages.bodypaint');
    }

    public function customercare()
    {
        return view('pages.customercare');
    }


}
