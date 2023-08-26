<?php

namespace App\Http\Controllers;

use App\Models\category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function create(){
        
        return view('category.create',['category'=>category::get()]);
    }
    public function store(Request $request){
        //validation
        $request->validate(
            [
                'name' => 'required',
            ]
            );
        // store artist to table

        $artist = new category;
        $artist->name = $request->name;
        $artist->save();
        return back()->withSuccess('Category Created !!!');
    }
    public function destroy($id){
        category::where('id',$id)->delete();
        return back()->withSuccess('Category Deleted !!!');
    }
}
