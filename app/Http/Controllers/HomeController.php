<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    
    public function aboutus(){
        return view('frontend.about');
    }
    public function contactus(){
        return view('frontend.contacts');
    }
    public function become_a_teacher(){
        return view('frontend.become_a_teacher');
    }
}
