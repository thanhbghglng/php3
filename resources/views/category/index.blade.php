{{-- home thua ke tu view master --}}

@extends('layout.master');

{{-- section thay doi phan yield trong master voi ten tuong ung --}}
@section('title','Category Page');
@section ('content-title','Category-Page');
@section('content')
    <div>
        <a href="{{route('categories.create')}}"><button class="btn btn-primary">Create</button></a>
    </div>
<table class="table table-hover">
    <thead>
        <th>ID</th>
        <th>Name</th>
        <th>Description</th>
        <th>Product</th>
        <th>Status</th>
        <th>News</th>
        <th>Action</th>
    </thead>
    <tbody>
        @foreach ($categories as $category)
        {{-- {{dd($categories)}} --}}
                <tr  >
                    
                    <td>{{ $category->id }}</td>
                    <td>{{ $category->name }}</td>
                    <td>{{ $category->description ?: 'N/A' }}</td>
                    <td>  @foreach ($category->products as $productsItem)
                            <p>{{$productsItem->name}} </p>
                    @endforeach </td>
                    <td>{{ $category->status==1?'Active':'Deactive'  }}</td>
                    <td> 
                        @foreach ($category->news as $newsItem)
                                <p> {{$newsItem->title}} </p>
                        @endforeach
                    </td>
                    
                    <td>
                       
                        <a href="{{route('categories.edit',$category->id)}}  " class="btn btn-primary"> Edit</a>
                        <form 
                        action="{{route('categories.delete',$category->id)}} "
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
{{$categories->links()}}
@endsection
    

