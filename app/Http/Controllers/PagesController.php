<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    //
    public function index(){
      return view('loader');
    }

    public function loader(){
      return view('loader');
    }

    public function about(){
      return view('about');
    }

    public function services(){
      return view('services');
    }

    public function projects(){
      return view('projects');
    }

    public function contact(){
      return view('contact.create');
    }
    public function team(){
      return view('team');
    }


}
