<?php

namespace App\Http\Controllers;

class SiteController extends Controller
{
    public function index()
    {
        return view('index');
    }





    public function contact()
    {
        return view('contact');
    }
}