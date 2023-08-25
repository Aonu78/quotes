@extends('artist.header')
@section('main')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-sm-8">
            <div class="card mt-3 p-3">
                <h3>Edit Artist {{$artist->name}}</h3>
                <form action="/artist/{{$artist->id}}/update" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('PUT') 
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" name="name" value="{{ old('name', $artist->name) }}" class="form-control"/>
                        @if($errors->has('name'))
                        <span class="text-danger">{{$errors->first('name')}}</span>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="discription">Discription</label>
                        <textarea name="discription" value='{{old('discription',$artist->discription)}}' id="discription" cols="4" class="form-control"></textarea>
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
    </div>
</div>

@endsection