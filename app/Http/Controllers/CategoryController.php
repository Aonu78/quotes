<?php

namespace App\Http\Controllers;

use App\Models\category;
use Illuminate\Http\Request;
use Auth;
class CategoryController extends Controller
{
    public function create(){
        if (Auth::check()) {
            return view('category.create',['category'=>category::latest()->get()]);
        } else {
            return redirect('/login');
        }
    }
    public function store(Request $request){
        if (Auth::check()) {
            //validation
            $request->validate(
                [
                    'name' => 'required',
                ]
                );
            // store artist to table
            if(category::where('name',$request->name)->first())
            {return back()->withSuccess('Already Exist !!!');}
            $artist = new category;
            $artist->name = $request->name;
            $artist->save();
            return back()->withSuccess('Category Created !!!');
        } else {
            return redirect('/login');
        }
    }
    public function destroy($id){
        if (Auth::check()) {
            category::where('id',$id)->delete();
            return back()->withSuccess('Category Deleted !!!');
        } else {
            return redirect('/login');
        }
    }
}
