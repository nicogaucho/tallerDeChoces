<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class PublicController extends Controller
{
    public function index() {

        $coches = [
            [ "name" => "Mercedes", "price" => "20000", "img" => "/img/mercedes.jpg"],
            [ "name" => "Ferrari", "price" => "40000", "img" => "/img/ferrari.jpg"],
            [ "name" => "Lamborghini", "price" => "50000", "img" => "/img/lamborghini.jpg"],
            [ "name" => "Ford", "price" => "10000", "img" => "/img/ford.jpg"],
            [ "name" => "Nissan", "price" => "12000", "img" => "/img/nissan.jpg"],
            [ "name" => "Fiat", "price" => "8000", "img" => "/img/fiat.jpg"],
        ];
        return view('home', [ "coches" => $coches ]);
    }

    public function services() {
        return view('services');
    }

    public function sales() {
        return view('sales');
    }

    public function contact() {
        return view('contact');
    }

    public function submit(Request $request)
    {
       $name = $request->input('name');
       $email = $request->input('email');
       $password = $request->input('password');

       $contact = compact('name', 'email');

       Mail::to($email)->send(new ContactMail($contact));
       return redirect()->route('mail.thankyou', compact('name'));
        
    }
  
    public function thankyou($name){
       return view('mail.thankyou',compact('name'));
}

}

