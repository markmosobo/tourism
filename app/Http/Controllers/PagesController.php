<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index()
    {
        return view('app');
    }

    public function about()
    {
        return view('about');
    }    

    public function packages()
    {
        return view('packages');
    }  
    
    public function tours()
    {
        return view('tours');
    } 
    
    public function contact()
    {
        return view('contact');
    }    
}
