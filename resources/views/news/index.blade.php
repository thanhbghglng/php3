@extends('layout.master');

{{-- section thay doi phan yield trong master voi ten tuong ung --}}
@section('title','News Page');
@section ('content-title','News Page');
@section('content')
    
<table class="table table-hover">
    <thead>
        <th>ID</th>
        <th>Title</th>
        <th>Content</th>
        <th>Product</th>
        <th>Category</th>
        <th>Action</th>
    </thead>
    <tbody>


        
        @foreach ($news as $newsItem)
            {{-- {{dd($products)}} --}}
            <tr>
                <td> {{$newsItem->id}} </td>
                <td style="width:200"> {{$newsItem->title}} </td>
                <td style="width: 500"> {{$newsItem->content}} </td>
                {{-- <td> {{$newsItem->news_products_count}} </td> --}}
                <td>  @foreach ($newsItem->newsProducts as $product)
                        <p>{{$product->name}}</p>

                @endforeach </td>
                <td> {{$newsItem->categoryNews->name}} </td>
                <td style="width:300 ">

                    <form action="{{route('news.delete',$newsItem->id)}}" method="POST">
                        @method('DELETE')
                        @csrf
                        <button type="submit" class="btn btn-danger" >Xóa</button>
                    </form>
                    <button class="btn btn-primary" >Sửa</button>
                </td>

            </tr>
        @endforeach
    </tbody>
</table>
{{$news}}
@endsection