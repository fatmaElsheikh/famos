<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pageController extends Controller
{
    public function index(){
        return view('welcome');
    }

    public function about(){
        $title='About Us';
        return view('pages.about',compact('title'));
    }

    public function contact(){
        $title='Contact Us';
        return view('pages.contact' , compact('title'));
    }
  
    public function login(){
        $title='login';
        return view('pages.login' , compact('title'));
    }
}
