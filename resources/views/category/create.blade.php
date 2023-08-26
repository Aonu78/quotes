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
                <center><h1>Create Category</h1></center>
                <form action="/category/store" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" name="name" placeholder="Add category name.." value="{{ old('name') }}" class="form-control"/>
                        @if($errors->has('name'))
                        <span class="text-danger">{{$errors->first('name')}}</span>
                        @endif
                    </div>
                    <button type="submit" class="btn btn-dark">Submit</button>
                </form>
            </div>
            <table class="table table-hover mt-3">
                <thead>
                    @if($category)
                  <tr>
                    <th>Sr.No</th>
                    <th><center>Name</center></th>
                    <th><center>Action</center></th>
                  </tr>
                  @endif
                </thead>
                <tbody>
                    @foreach ($category as $item)
                    <tr>
                        <td>{{$loop->index+1}}</td>
                        <td><center>{{$item->name}}</center></td>
                        <td><center>
                            {{-- <a href="/category/{{$item->id}}/edit" class="btn btn-success btn-sm">Edit</a> --}}
                            {{-- <a href="artist/{{$item->id}}/delete" class="btn btn-danger">Delete</a> --}}
                            <form action="/category/{{$item->id}}/delete" class="d-inline">
                                {{-- @csrf --}}
                                {{-- @method('delete') --}}
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

</div>

@endsection