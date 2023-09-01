<?php

namespace App\Http\Controllers;

use App\Models\Artist;
use App\Models\category;
use App\Models\quotes;
use Illuminate\Http\Request;
use Auth;
class QuotesController extends Controller
{
    public function create(){
        if (Auth::check()) {
            
            return view('quotes.create',['quotes'=>quotes::latest()->limit(50)->get(),'artists'=>Artist::get(),'category'=>category::get()]);
        } else {
            return redirect('/login');
        }
    }
    public function store(Request $request){
        if (Auth::check()) {
            //validation
            $request->validate(
                [
                    'quote' => 'required',
                ]
                );
            // store artist to table
            if(quotes::where('quote',$request->quote)->first())
            {return back()->withSuccess('Already Exist !!!');}
            $artist = new quotes;
            $artist->quote = $request->quote;
            $artist->artist = $request->artist;
            $artist->category = $request->category;
            $artist->save();
            return back()->withSuccess('Quotes Created !!!');
        } else {
            return redirect('/login');
        }
    }
    public function destroy($id){
        if (Auth::check()) {
            quotes::where('id',$id)->delete();
            return back()->withSuccess('Quotes Deleted !!!');
        } else {
            return redirect('/login');
        }
    }
}
