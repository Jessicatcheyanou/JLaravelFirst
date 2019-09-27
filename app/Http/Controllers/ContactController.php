<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ContactFormRequest;
use App\Mail\ContactFormMail;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    //
    public function create(){

      return view('contact.create');
    }

    public function store(Request $request){

        //  dd($request -> all());


          $data = request() -> validate([
            'name' => 'required',
            'email' => 'required|email',
            'tel' => 'required',
            'message' => 'required'
          ]);

          //Send An Email

          Mail::to('info@karismaconcepts.com')->send(new ContactFormMail($data));

          return redirect('contact')->with('flash-message','Thank You for your message.');

        
    }
}
