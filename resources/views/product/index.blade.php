@extends('layout.master')
@section('title','Product Page')
@section('content-title','Product Page')
@section('content')
<div>
    <a href="{{route('product.create')}}"><button class="btn btn-primary">Create</button></a>
</div>
<table class="table table-hover">
    <thead>
        <th>ID</th>
        <th>Name</th>
        <th>price</th>
        <th>Thumbnail</th>
        <th>Category</th>
        <th>Created at</th>
        <th>Updated at</th>
        <th>Action</th>
    </thead>
    <tbody>
       
        @foreach ($products as $product)
                <tr>
                    
                    <td>{{ $product->id }}</td>
                    <td>{{ $product->name }}</td>
                    <td>{{$product->price}} </td>
                    <td><img height="100" src="{{ $product->thumbnail_url ?: 'N/A' }}" alt=""></td>
                    <td>{{$product->category->name}} </td>
                    <td>{{ $product->created_at ?: 'N/A' }}</td>
                    <td>{{ $product->updated_at ?: 'N/A' }}</td>
                    <td>
                        
                        <a class="btn btn-primary" href=" ">Edit</a>
                        <form 
                        action="{{route('product.delete',$product->id)}} "
                        method="POST"
                        
                        >
                        @method('DELETE')
                        {{-- <input type="text" name="_method" value="DELETE"> --}}
                        @csrf
                        {{-- <input type="text" name="csrf" value="asdasddas"> --}}
                        <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                    
                </tr>
        @endforeach
    </tbody>
</table>
{{$products->links()}}
@endsection