<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PublicController extends Controller
{
    public function index() {

        $coches = [
            [ "name" => "Mercedes", "price" => "20000", "img" => "/img/mercedes.jpg"],
            [ "name" => "Ferrari", "price" => "40000", "img" => "/img/ferrari.jpg"],
            [ "name" => "Lamborghini", "price" => "50000", "img" => "/img/lamborghini.jpg"],
            [ "name" => "Ford", "price" => "10000", "img" => "/img/ford.jpg"],
            [ "name" => "Nissan", "price" => "12000", "img" => "/img/nissan .jpg"],
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
        
        return view('contact');
        
    }

}

