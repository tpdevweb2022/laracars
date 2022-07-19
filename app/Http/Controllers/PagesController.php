<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home()
    {
        $data = [
            "firstName" => "John",
            "lastName" => "Doe",
            "age" => 25
        ];
        return view('welcome', compact("data")); // [ "data" => $data ]
    }
    public function about()
    {
        return view('a-propos');
    }
    public function contact()
    {
        return view('contact');
    }
}
