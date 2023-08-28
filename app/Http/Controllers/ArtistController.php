<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Artist;
use DB;
use Auth;
class ArtistController extends Controller
{
    public function index(){
        if (Auth::check()) {
            return view('artist.index',['artists'=>Artist::get()]);
        } else {
            return redirect('/login');
        }
        
    }
    public function create(){
        if (Auth::check()) {
            return view('artist.create',['artists'=>Artist::get()]);
        } else {
            return redirect('/login');
        }
    }
    public function store(Request $request){
        //validation
        if (Auth::check()) {
            $request->validate(
                [
                    'name' => 'required',
                    // 'image' => 'required|mimes:image,jpg,jpeg,png,gif|max:1000'
                ]
                );
            // store artist to table
            if($request->image){
                $imageName = time().'.'.$request->image->getClientOriginalExtension();
                $request->image->move(public_path('artists'),$imageName);
                $artist = new Artist;
                $artist->name = $request->name;
                // $artist->discription = $request->discription;
                $artist->image = $imageName;
                $artist->save();
            }
            else{
                // $imageName = time().'.'.$request->image->getClientOriginalExtension();
                // $request->image->move(public_path('artists'),$imageName);
                $artist = new Artist;
                $artist->name = $request->name;
                // $artist->discription = $request->discription;
                // $artist->image = $imageName;
                $artist->save();
            }
            return back()->withSuccess('Author Added !!!');
        } else {
            return redirect('/login');
        }
    }
    public function edit($id){
        if (Auth::check()) {
            return view('artist.edit',['artist'=>Artist::where('id',$id)->first()]);
        } else {
            return redirect('/login');
        }
    }
    public function update(Request $request, $id){
        if (Auth::check()) {
            $request->validate(
                [
                    'name' => 'required',
                    'image' => 'nullable|mimes:image,jpg,jpeg,png,gif|max:1000'
                ]
                );
            $artist = Artist::where('id',$id)->first();
            if(isset($request->image)){
                $imageName = time().'.'.$request->image->getClientOriginalExtension();
                $request->image->move(public_path('artists'),$imageName);
                $artist->image = $imageName;
            }
            $artist->name = $request->name;
            $artist->discription = $request->discription;
            $artist->save();
            return back()->withSuccess('Artist Updated !!!');
        } else {
            return redirect('/login');
        }
    }
    public function destroy($id){
        if (Auth::check()) {
            Artist::where('id',$id)->delete();
            return back()->withSuccess('Artist Deleted !!!');
        } else {
            return redirect('/login');
        }
    }
}