<?php

namespace App\Http\Controllers;

use App\Models\Artist;
use App\Models\category;
use App\Models\quotes;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
// use Illuminate\Http\Request;
use Request;
use Illuminate\Support\Facades\Http;

class Controller extends BaseController
{
    // use AuthorizesRequests, ValidatesRequests;
    public function index(){
        return view('home',['category'=>category::get(),'quotes'=>quotes::get(),'artists'=>Artist::get(),'mainquote'=>quotes::first(),'quoteid'=>null,'feature'=>"Genral"]);
    }
    public function categoryfilter($id,$quoteid=null){
        // if ((int)$id) {
        //     $category = quotes::where('artist',$id)->get();
        //   } else {
        //     $category = quotes::where('category',$id)->get();
        //   }
        // dd();
        return view('home',['category'=>category::get(),'quotes'=>quotes::where('category',$id)->get(),'artists'=>Artist::get(),'feature'=>$id,'mainquote'=>quotes::first(),'quoteid'=>quotes::where('id',$quoteid)->first()]);
    }
    public function categoryauthor($id){
        // dd(Request::get('search'));
        return view('home',['category'=>category::get(),'quotes'=>quotes::where('artist',$id)->get(),'artists'=>Artist::get(),'feature'=>$id,'mainquote'=>quotes::first(),'quoteid'=>null]);
    }
    public function search(Request $request){
        // dd(Request::get('search'));
        $query = Request::get('search');
        if ($query)
        {
            $posts = quotes::where('artist', 'LIKE', "%$query%")
                ->orWhere('quote', 'LIKE', "%$query%")
                ->orWhere('category','LIKE', "%$query%")
                ->paginate(15);
        }
        return view('home',['category'=>category::get(),'quotes'=>$posts,'artists'=>Artist::get(),'mainquote'=>quotes::first(),'quoteid'=>null,'feature'=>"Query"]);
    }
}

