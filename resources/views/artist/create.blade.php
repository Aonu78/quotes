@extends('artist.header')
@section('main')
<div class="container">
    <div class="row">
        <div class="text-right">
            <a href="/dashboard" class="btn btn-dark mt-2 m-2">Dashboard</a>
        </div>
        {{-- <div class="text-right">
            <a href="/quotes/create" class="btn btn-dark mt-2 m-2">Add Quotes</a>
        </div> --}}
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
                <form action="/artist/store" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" name="name" value="{{ old('name') }}" class="form-control"/>
                        @if($errors->has('name'))
                        <span class="text-danger">{{$errors->first('name')}}</span>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="discription">Discription</label>
                        <textarea name="discription" value='{{old('discription')}}' id="discription" cols="4" class="form-control"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="image">Image</label>
                        <input type="file" name="image" value="{{old('image')}}" class="form-control"/>
                        @if($errors->has('image'))
                        <span class="text-danger">{{$errors->first('image')}}</span>
                        @endif
                    </div>
                    <button type="submit" class="btn btn-dark">Submit</button>
                </form>
            </div>
        </div>
        <table class="table table-hover mt-3">
            <thead>
                @if($artists)
              <tr>
                <th>Sr.No</th>
                <th>Name</th>
                <th>Image</th>
                <th>Action</th>
              </tr>
              @endif
            </thead>
            <tbody>
                @foreach ($artists as $item)
                <tr>
                    <td>{{$loop->index+1}}</td>
                    <td>{{$item->name}}</td>
                    <td><img src="/artists/{{$item->image}}" alt="" class="rounded-circle" width="30" height="30"></td>
                    <td><a href="/artist/{{$item->id}}/edit" class="btn btn-success btn-sm">Edit</a>
                        {{-- <a href="artist/{{$item->id}}/delete" class="btn btn-danger">Delete</a> --}}
                        <form action="/artist/{{$item->id}}/delete" class="d-inline">
                            @csrf
                            @method('delete')
                            <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                        </form>
                    </td>
    
                    
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

@endsection