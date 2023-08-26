@extends('artist.header')
@section('main')

<div class="container">
        <div class="row">
            <div class="text-right">
                <a href="/dashboard" class="btn btn-dark mt-2 m-2">Dashboard</a>
            </div>
            <div class="text-right">
                <a href="/quotes/create" class="btn btn-dark mt-2 m-2">Add Quotes</a>
            </div>
            <div class="text-right">
                <a href="/artist/create" class="btn btn-dark mt-2 m-2">Add Author</a>
            </div>
            <div class="text-right">
                <a href="/category/create" class="btn btn-dark mt-2">Add Category</a>
            </div>
        </div>
    <div class="row justify-content-center">
        <div class="col-sm-8">
            <div class="card mt-3 p-3">
                <center><h1>Create Quotes</h1></center>
                <form action="/quotes/store" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <textarea name="quote" value='{{old('quote')}}' placeholder="Write Quotes Here..." id="quote" rows="4" class="form-control mt-4"></textarea>                        @if($errors->has('name'))
                        <span class="text-danger">{{$errors->first('name')}}</span>
                        @endif
                    </div>
                    
                    <select class="form-control mb-3" name="category">
                        <option value="" class="form-control" selected disabled>Select Category...</option>
                        @foreach($category as $item)
                        <option value="{{$item->name}}" class="form-control">{{$item->name}}</option>
                        @endforeach
                    </select>
                    <select class="form-control mb-3" name="artist">
                        <option value="" class="form-control" selected disabled>Select Poet...</option>
                        @foreach($artists as $item)
                        <option value="{{$item->name}}" class="form-control">{{$item->name}}</option>
                        @endforeach
                    </select>  

                    <button type="submit" class="btn btn-dark">Submit</button>
                </form>
            </div>
        </div>
        <table class="table" class="form-control table-hover mt-3">
            <thead>
                @if($quotes)
              <tr>
                <th>Sr.No</th>
                <th><center>Quotes</center></th>
                <th><center>Category</center></th>
                <th><center>Author</center></th>
                <th><center>Action</center></th>
              </tr>
              @endif
            </thead>
            <tbody>
                @foreach ($quotes as $item)
                <tr>
                    <td>{{$loop->index+1}}</td>
                    <td><center>{{$item->quote}}</center></td>
                    <td><center>{{$item->artist}}</center></td>
                    <td><center>{{$item->category}}</center></td>
                    <td><center>
                       <form action="/quotes/{{$item->id}}/delete" class="d-inline">
                    
                            <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                        </form>
                    </center>
                    </td>
    
                    
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

</div>

@endsection