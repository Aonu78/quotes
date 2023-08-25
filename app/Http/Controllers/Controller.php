<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class Controller extends BaseController
{
    // use AuthorizesRequests, ValidatesRequests;

    
    public function findquotes(Request $request)
    {
    // $quotesdata = ["one" => "apple","two" => "bnana","three" => "mango"];
    $data = 'New Data';

    return view('welcome',['newdata' => $data]);
    }

}

