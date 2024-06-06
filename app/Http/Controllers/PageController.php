<?php

namespace App\Http\Controller;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function welcome(){
        return view('welcome');
    }
    public function home(){
        return view('home');
    }
    public function about(){
        return view('about');
    }
    public function education(){
        return view('education');
    }
    public function projects(){
        return view('projects');
    }
}
?>