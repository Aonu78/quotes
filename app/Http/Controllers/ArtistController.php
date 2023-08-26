<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Artist;
use DB;
class ArtistController extends Controller
{
    public function index(){
        $artists = Artist::get();
        return view('artist.index',['artists'=>$artists]);
    }
    public function create(){
        $artists = Artist::get();
        return view('artist.create',['artists'=>$artists]);
    }
    public function store(Request $request){
        //validation
        $request->validate(
            [
                'name' => 'required',
                'image' => 'required|mimes:image,jpg,jpeg,png,gif|max:1000'
            ]
            );
        // store artist to table
        $imageName = time().'.'.$request->image->getClientOriginalExtension();
        $request->image->move(public_path('artists'),$imageName);
        $artist = new Artist;
        $artist->name = $request->name;
        $artist->discription = $request->discription;
        $artist->image = $imageName;

        $artist->save();
        return back()->withSuccess('Artist Created !!!');
    }
    public function edit($id){
        $artist = Artist::where('id',$id)->first();
        return view('artist.edit',['artist'=>$artist]);
    }
    public function update(Request $request, $id){
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
    }
    public function destroy($id){
        Artist::where('id',$id)->delete();
        return back()->withSuccess('Artist Deleted !!!');
    }
    
    // public function search(Request $request)
    // {
    //     if($request->ajax())
    //     {
    //         $output="";
    //         $products=DB::table('artists')->where('name','LIKE','%'.$request->search."%")->get();
    //         if($products)
    //         {
    //         foreach ($products as $product) {
    //         $output.='<tr>'.
    //         '<td>'.$product->id.'</td>'.
    //         '<td>'.$product->name.'</td>'.
    //         '<td>'.$product->name.'</td>'.
    //         '<td>'.$product->name.'</td>'.
    //         '</tr>';
    //         }
    //         return Response($output);
    //         }
    //     }
    // }
}
