<?php

namespace App\Http\Controllers;

use App\Models\Artist;
use App\Models\category;
use App\Models\quotes;
use Illuminate\Http\Request;

class QuotesController extends Controller
{
    public function create(){
        return view('quotes.create',['quotes'=>quotes::get(),'artists'=>Artist::get(),'category'=>category::get()]);
    }
    public function store(Request $request){
        //validation
        $request->validate(
            [
                'quote' => 'required',
            ]
            );
        // store artist to table

        $artist = new quotes;
        $artist->quote = $request->quote;
        $artist->artist = $request->artist;
        $artist->category = $request->category;
        $artist->save();
        return back()->withSuccess('Quotes Created !!!');
    }
    public function destroy($id){
        quotes::where('id',$id)->delete();
        return back()->withSuccess('Quotes Deleted !!!');
    }
}
