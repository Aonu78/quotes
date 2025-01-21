<?php

namespace App\Http\Controllers;
use App\Models\Artist;
use App\Models\category;
use Illuminate\Http\Request;

class OtherpagesController extends Controller
{
    public function terms_of_use(){
        return view('terms',['category'=>category::get(),'artists'=>Artist::get()]);
    }
    public function privacy_policy(){
        return view('policy',['category'=>category::get(),'artists'=>Artist::get()]);
    }

    public function about_us(){
        return view('about_us',['category'=>category::get(),'artists'=>Artist::get()]);
    }
}
