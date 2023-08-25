@extends('artist.header')
@section('main')
<div class="container">
    <div class="text-right">
        <a href="artist/create" class="btn btn-dark mt-2">Add Artist</a>
    </div>
    <table class="table table-hover mt-3">
        <thead>
          <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Image</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($artists as $item)
            <tr>
                <td>{{$loop->index+1}}</td>
                <td>{{$item->name}}</td>
                <td><img src="artists/{{$item->image}}" alt="" class="rounded-circle" width="30" height="30"></td>
                <td><a href="artist/{{$item->id}}/edit" class="btn btn-success btn-sm">Edit</a>
                    {{-- <a href="artist/{{$item->id}}/delete" class="btn btn-danger">Delete</a> --}}
                    <form action="artist/{{$item->id}}/delete" class="d-inline">
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

@endsection
